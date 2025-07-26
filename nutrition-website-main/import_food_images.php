#!/usr/bin/env php
<?php

/**
 * Food Images Import Script
 * 
 * This script helps you import a folder of food images into your Laravel nutrition website.
 * 
 * Usage: php import_food_images.php /path/to/your/food/images/folder
 */

// Check if path argument is provided
if ($argc < 2) {
    echo "Usage: php import_food_images.php /path/to/your/food/images/folder\n";
    exit(1);
}

$imagesFolderPath = $argv[1];

// Check if the folder exists
if (!is_dir($imagesFolderPath)) {
    echo "Error: Folder does not exist: {$imagesFolderPath}\n";
    exit(1);
}

// Get the project root directory
$projectRoot = __DIR__;
$storageDir = $projectRoot . '/storage/app/public/foods';

// Create storage directory if it doesn't exist
if (!is_dir($storageDir)) {
    mkdir($storageDir, 0775, true);
    echo "Created storage directory: {$storageDir}\n";
}

// Get all image files
$imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
$imageFiles = [];

foreach ($imageExtensions as $ext) {
    $files = glob($imagesFolderPath . "/*.{$ext}", GLOB_BRACE);
    $imageFiles = array_merge($imageFiles, $files);
    
    // Also check uppercase extensions  
    $files = glob($imagesFolderPath . "/*.{" . strtoupper($ext) . "}", GLOB_BRACE);
    $imageFiles = array_merge($imageFiles, $files);
}

if (empty($imageFiles)) {
    echo "No image files found in the specified folder.\n";
    exit(1);
}

echo "Found " . count($imageFiles) . " image files.\n";
echo "Copying images to storage directory...\n";

$copiedCount = 0;

foreach ($imageFiles as $imagePath) {
    $filename = basename($imagePath);
    $destinationPath = $storageDir . '/' . $filename;
    
    if (copy($imagePath, $destinationPath)) {
        echo "Copied: {$filename}\n";
        $copiedCount++;
    } else {
        echo "Failed to copy: {$filename}\n";
    }
}

echo "\nCopy completed!\n";
echo "Copied {$copiedCount} images to {$storageDir}\n";
echo "\nNext steps:\n";
echo "1. Make sure the storage link exists: php artisan storage:link\n";
echo "2. Update your food records in the database to reference these images\n";
echo "3. Image URLs will be: /storage/foods/[filename]\n";

?>
