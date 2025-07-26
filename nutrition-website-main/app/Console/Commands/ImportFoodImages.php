<?php

namespace App\Console\Commands;

use App\Models\Food;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImportFoodImages extends Command
{
    protected $signature = 'food:import-images {folder_path : Path to the folder containing food images}';
    protected $description = 'Import food images from a folder and associate them with food items';

    public function handle()
    {
        $folderPath = $this->argument('folder_path');
        
        if (!File::exists($folderPath)) {
            $this->error("Folder path does not exist: {$folderPath}");
            return 1;
        }

        $this->info("Starting food image import from: {$folderPath}");
        
        // Get all image files from the folder
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $imageFiles = [];
        
        foreach ($imageExtensions as $ext) {
            $files = File::glob($folderPath . "/*.{$ext}");
            $imageFiles = array_merge($imageFiles, $files);
            
            // Also check uppercase extensions
            $files = File::glob($folderPath . "/*.{" . strtoupper($ext) . "}");
            $imageFiles = array_merge($imageFiles, $files);
        }

        if (empty($imageFiles)) {
            $this->error("No image files found in the specified folder.");
            return 1;
        }

        $this->info("Found " . count($imageFiles) . " image files.");

        $importedCount = 0;
        $skippedCount = 0;

        $progressBar = $this->output->createProgressBar(count($imageFiles));
        $progressBar->start();

        foreach ($imageFiles as $imagePath) {
            $filename = basename($imagePath);
            $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
            
            // Try to match the image with a food item
            $food = $this->findMatchingFood($nameWithoutExtension);
            
            if ($food) {
                // Copy the image to storage
                $newFilename = $this->copyImageToStorage($imagePath, $food);
                
                if ($newFilename) {
                    // Update the food record
                    $food->update(['photo' => '/storage/foods/' . $newFilename]);
                    $importedCount++;
                } else {
                    $skippedCount++;
                }
            } else {
                $skippedCount++;
            }
            
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine();

        $this->info("Import completed!");
        $this->info("Imported: {$importedCount} images");
        $this->info("Skipped: {$skippedCount} images");

        return 0;
    }

    private function findMatchingFood($imageName)
    {
        // First try exact match on Turkish description
        $food = Food::where('turkish_description', 'like', '%' . $imageName . '%')->first();
        
        if (!$food) {
            // Try exact match on English description
            $food = Food::where('description', 'like', '%' . $imageName . '%')->first();
        }
        
        if (!$food) {
            // Try fuzzy matching by removing spaces and special characters
            $cleanImageName = $this->cleanString($imageName);
            
            $foods = Food::all();
            foreach ($foods as $foodItem) {
                $cleanTurkish = $this->cleanString($foodItem->turkish_description);
                $cleanEnglish = $this->cleanString($foodItem->description);
                
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

    private function copyImageToStorage($sourcePath, $food)
    {
        try {
            $extension = pathinfo($sourcePath, PATHINFO_EXTENSION);
            $filename = Str::slug($food->turkish_description ?: $food->description) . '_' . time() . '.' . $extension;
            
            $destinationPath = storage_path('app/public/foods/' . $filename);
            
            if (File::copy($sourcePath, $destinationPath)) {
                return $filename;
            }
        } catch (\Exception $e) {
            $this->error("Failed to copy image: " . $e->getMessage());
        }
        
        return null;
    }
}
