<?php

echo "=== Food Images Status Check ===\n\n";

try {
    // Database connection
    $pdo = new PDO('sqlite:database/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get statistics
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM food");
    $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    $stmt = $pdo->query("SELECT COUNT(*) as with_photos FROM food WHERE photo IS NOT NULL AND photo != ''");
    $withPhotos = $stmt->fetch(PDO::FETCH_ASSOC)['with_photos'];
    
    $stmt = $pdo->query("SELECT COUNT(*) as without_photos FROM food WHERE photo IS NULL OR photo = ''");
    $withoutPhotos = $stmt->fetch(PDO::FETCH_ASSOC)['without_photos'];
    
    echo "📊 Database Statistics:\n";
    echo "Total food items: $total\n";
    echo "Food items with photos: $withPhotos\n";
    echo "Food items without photos: $withoutPhotos\n";
    echo "Coverage: " . round(($withPhotos / $total) * 100, 1) . "%\n\n";
    
    // Check storage
    $storageDir = 'storage/app/public/foods';
    if (is_dir($storageDir)) {
        $allFiles = scandir($storageDir);
        $imageFiles = array_filter($allFiles, function($file) {
            return !in_array($file, ['.', '..']) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
        });
        echo "📁 Storage Status:\n";
        echo "Images in storage: " . count($imageFiles) . "\n";
        echo "Storage directory: $storageDir ✓\n";
    } else {
        echo "❌ Storage directory not found: $storageDir\n";
    }
    
    // Check symlink
    $symlinkPath = 'public/storage';
    if (is_link($symlinkPath)) {
        $target = readlink($symlinkPath);
        echo "\n🔗 Symlink Status:\n";
        echo "Public storage symlink: ✓\n";
        echo "Target: $target\n";
        
        if (is_dir($symlinkPath . '/foods')) {
            $publicImages = array_diff(scandir($symlinkPath . '/foods'), ['.', '..']);
            echo "Accessible via web: " . count($publicImages) . " files ✓\n";
        } else {
            echo "❌ Foods directory not accessible via web\n";
        }
    } else {
        echo "\n❌ Public storage symlink missing\n";
        echo "Run: php artisan storage:link\n";
    }
    
    // Show sample foods with photos
    if ($withPhotos > 0) {
        echo "\n🍎 Sample foods with photos:\n";
        $stmt = $pdo->query("SELECT turkish_description, photo FROM food WHERE photo IS NOT NULL AND photo != '' LIMIT 5");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "- " . substr($row['turkish_description'], 0, 30) . " -> " . basename($row['photo']) . "\n";
        }
    }
    
    echo "\n";
    
    if ($withPhotos > ($total * 0.5)) {
        echo "✅ SUCCESS: Food images are working! More than 50% of foods have photos.\n";
        echo "🌐 Start the server with: php artisan serve\n";
        echo "🔍 Then visit: http://localhost:8000/foods\n";
    } else if ($withPhotos > 0) {
        echo "⚠️  PARTIAL: Some food images are linked, but coverage is low.\n";
        echo "💡 Consider running the fix script again or adding more images.\n";
    } else {
        echo "❌ ISSUE: No food images are linked to database entries.\n";
        echo "🔧 Run the fix script: php fix_food_images.php\n";
    }
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
