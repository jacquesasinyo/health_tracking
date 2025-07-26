<?php

namespace App\Console\Commands;

use App\Models\Food;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LinkFoodImages extends Command
{
    protected $signature = 'food:link-images';
    protected $description = 'Link existing images in storage to food items';

    public function handle()
    {
        $this->info('Starting to link existing images to food items...');
        
        $storageDir = storage_path('app/public/foods');
        
        if (!File::exists($storageDir)) {
            $this->error("Storage directory does not exist: {$storageDir}");
            return 1;
        }

        // Get all image files
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $imageFiles = [];
        
        foreach ($imageExtensions as $ext) {
            $files = File::glob($storageDir . "/*.{$ext}");
            $imageFiles = array_merge($imageFiles, $files);
            
            // Also check uppercase extensions
            $files = File::glob($storageDir . "/*.{" . strtoupper($ext) . "}");
            $imageFiles = array_merge($imageFiles, $files);
        }

        if (empty($imageFiles)) {
            $this->error("No image files found in {$storageDir}");
            return 1;
        }

        $this->info("Found " . count($imageFiles) . " image files.");

        $linkedCount = 0;
        $skippedCount = 0;

        $progressBar = $this->output->createProgressBar(count($imageFiles));
        $progressBar->start();

        foreach ($imageFiles as $imagePath) {
            $filename = basename($imagePath);
            $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
            
            // Try to match the image with a food item
            $food = $this->findMatchingFood($nameWithoutExtension);
            
            if ($food && !$food->photo) {
                // Update the food record with the photo path
                $food->update(['photo' => '/storage/foods/' . $filename]);
                $linkedCount++;
            } else {
                $skippedCount++;
            }
            
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine();

        $this->info("Linking completed!");
        $this->info("Linked: {$linkedCount} images");
        $this->info("Skipped: {$skippedCount} images");

        return 0;
    }

    private function findMatchingFood($imageName)
    {
        // Clean the image name for better matching
        $cleanImageName = $this->cleanString($imageName);
        
        // First try exact match on Turkish description
        $food = Food::whereRaw('LOWER(turkish_description) LIKE ?', ['%' . strtolower($imageName) . '%'])->first();
        
        if (!$food) {
            // Try exact match on English description
            $food = Food::whereRaw('LOWER(description) LIKE ?', ['%' . strtolower($imageName) . '%'])->first();
        }
        
        if (!$food) {
            // Try fuzzy matching by removing spaces and special characters
            $foods = Food::all();
            foreach ($foods as $foodItem) {
                $cleanTurkish = $this->cleanString($foodItem->turkish_description ?? '');
                $cleanEnglish = $this->cleanString($foodItem->description ?? '');
                
                if (str_contains($cleanTurkish, $cleanImageName) || 
                    str_contains($cleanImageName, $cleanTurkish) ||
                    str_contains($cleanEnglish, $cleanImageName) || 
                    str_contains($cleanImageName, $cleanEnglish)) {
                    return $foodItem;
                }
            }
        }

        return $food;
    }

    private function cleanString($string)
    {
        return strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
    }
}
