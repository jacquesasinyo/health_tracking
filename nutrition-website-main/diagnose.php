<?php

// Simple diagnostic script
echo "=== Food Images Diagnostic ===\n\n";

// Check database connection
try {
    $pdo = new PDO('sqlite:database/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✓ Database connection successful\n";
    
    // Count total foods
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM food");
    $totalFoods = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
    echo "✓ Total food items in database: $totalFoods\n";
    
    // Count foods with photos
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM food WHERE photo IS NOT NULL AND photo != ''");
    $foodsWithPhotos = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
    echo "✓ Food items with photos: $foodsWithPhotos\n";
    
    if ($foodsWithPhotos > 0) {
        echo "\nFood items with photos:\n";
        $stmt = $pdo->query("SELECT id, turkish_description, photo FROM food WHERE photo IS NOT NULL AND photo != '' LIMIT 5");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "  - ID: {$row['id']}, Name: {$row['turkish_description']}, Photo: {$row['photo']}\n";
        }
    }
    
} catch (Exception $e) {
    echo "✗ Database error: " . $e->getMessage() . "\n";
}

// Check storage directory
$storageDir = 'storage/app/public/foods';
if (is_dir($storageDir)) {
    $images = array_diff(scandir($storageDir), ['.', '..']);
    $imageCount = count($images);
    echo "\n✓ Storage directory exists: $storageDir\n";
    echo "✓ Images in storage: $imageCount\n";
    
    if ($imageCount > 0) {
        echo "\nFirst 5 images in storage:\n";
        foreach (array_slice($images, 0, 5) as $image) {
            echo "  - $image\n";
        }
    }
} else {
    echo "\n✗ Storage directory not found: $storageDir\n";
}

// Check public storage symlink
$publicStorage = 'public/storage';
if (is_link($publicStorage)) {
    $target = readlink($publicStorage);
    echo "\n✓ Public storage symlink exists\n";
    echo "✓ Symlink target: $target\n";
    
    if (is_dir($publicStorage . '/foods')) {
        $publicImages = array_diff(scandir($publicStorage . '/foods'), ['.', '..']);
        echo "✓ Public storage/foods accessible with " . count($publicImages) . " images\n";
    } else {
        echo "✗ Public storage/foods not accessible\n";
    }
} else {
    echo "\n✗ Public storage symlink not found\n";
    echo "  Run: php artisan storage:link\n";
}

echo "\n=== Diagnosis Complete ===\n";
