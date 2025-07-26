<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FoodImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Path to your food images folder - use existing storage folder
        $imagesFolderPath = storage_path('app/public/foods');
        
        if (!File::exists($imagesFolderPath)) {
            $this->command->info("Food images folder not found at: {$imagesFolderPath}");
            $this->command->info("Please ensure images are in storage/app/public/foods directory.");
            return;
        }

        $this->command->info("Importing food images from: {$imagesFolderPath}");

        // Get all image files
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $imageFiles = [];
        
        foreach ($imageExtensions as $ext) {
            $files = File::glob($imagesFolderPath . "/*.{$ext}");
            $imageFiles = array_merge($imageFiles, $files);
            
            // Also check uppercase extensions
            $files = File::glob($imagesFolderPath . "/*.{" . strtoupper($ext) . "}");
            $imageFiles = array_merge($imageFiles, $files);
        }

        if (empty($imageFiles)) {
            $this->command->info("No image files found in the folder.");
            return;
        }

        $importedCount = 0;
        $skippedCount = 0;

        foreach ($imageFiles as $imagePath) {
            $filename = basename($imagePath);
            $nameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
            
            // Try to match the image with a food item
            $food = $this->findMatchingFood($nameWithoutExtension);
            
            if ($food && !$food->photo) { // Only update if no photo exists
                // Copy the image to storage
                $newFilename = $this->copyImageToStorage($imagePath, $food);
                
                if ($newFilename) {
                    // Update the food record
                    $food->update(['photo' => '/storage/foods/' . $newFilename]);
                    $this->command->info("Imported image for: {$food->turkish_description}");
                    $importedCount++;
                } else {
                    $skippedCount++;
                }
            } else {
                if ($food && $food->photo) {
                    $this->command->info("Skipping {$filename} - food already has image");
                } else {
                    $this->command->info("Skipping {$filename} - no matching food found");
                }
                $skippedCount++;
            }
        }

        $this->command->info("Import completed!");
        $this->command->info("Imported: {$importedCount} images");
        $this->command->info("Skipped: {$skippedCount} images");
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
            $filename = basename($sourcePath);
            
            // If the image is already in the storage directory, just return the filename
            if (dirname($sourcePath) === storage_path('app/public/foods')) {
                return $filename;
            }
            
            $extension = pathinfo($sourcePath, PATHINFO_EXTENSION);
            $newFilename = Str::slug($food->turkish_description ?: $food->description) . '_' . time() . '.' . $extension;
            
            // Ensure the storage directory exists
            $storageDir = storage_path('app/public/foods');
            if (!File::exists($storageDir)) {
                File::makeDirectory($storageDir, 0775, true);
            }
            
            $destinationPath = $storageDir . '/' . $newFilename;
            
            if (File::copy($sourcePath, $destinationPath)) {
                return $newFilename;
            }
        } catch (\Exception $e) {
            $this->command->error("Failed to copy image: " . $e->getMessage());
        }
        
        return null;
    }
}
