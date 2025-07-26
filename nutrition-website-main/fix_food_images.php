<?php

echo "=== Food Images Linking Script ===\n";
echo "Linking existing storage images to food items...\n\n";

try {
    // Database connection
    $pdo = new PDO('sqlite:database/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get all food items without photos
    $stmt = $pdo->query("SELECT id, turkish_description, description FROM food WHERE photo IS NULL OR photo = '' ORDER BY id");
    $foods = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "Found " . count($foods) . " food items without photos\n";
    
    // Get all images in storage
    $storageDir = 'storage/app/public/foods';
    if (!is_dir($storageDir)) {
        echo "Error: Storage directory not found: $storageDir\n";
        exit(1);
    }
    
    $allFiles = scandir($storageDir);
    $imageFiles = array_filter($allFiles, function($file) {
        return !in_array($file, ['.', '..']) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
    });
    
    echo "Found " . count($imageFiles) . " images in storage\n\n";
    
    if (empty($imageFiles)) {
        echo "No images found to link!\n";
        exit(0);
    }
    
    $linkedCount = 0;
    $updateStmt = $pdo->prepare("UPDATE food SET photo = ? WHERE id = ?");
    
    // Convert image files to array for easier manipulation
    $availableImages = array_values($imageFiles);
    
    foreach ($foods as $index => $food) {
        if (empty($availableImages)) {
            break; // No more images to assign
        }
        
        $turkish = strtolower($food['turkish_description'] ?? '');
        $english = strtolower($food['description'] ?? '');
        
        // Find best matching image
        $bestMatch = null;
        $bestMatchIndex = -1;
        $bestScore = 0;
        
        foreach ($availableImages as $imgIndex => $imageFile) {
            $imageName = strtolower(pathinfo($imageFile, PATHINFO_FILENAME));
            $score = 0;
            
            // Clean strings for better matching
            $cleanTurkish = preg_replace('/[^a-z0-9\s]/', '', $turkish);
            $cleanEnglish = preg_replace('/[^a-z0-9\s]/', '', $english);
            $cleanImage = preg_replace('/[^a-z0-9\s]/', ' ', $imageName);
            
            // Score based on word matches
            $turkishWords = array_filter(explode(' ', $cleanTurkish), function($w) { return strlen($w) > 2; });
            $englishWords = array_filter(explode(' ', $cleanEnglish), function($w) { return strlen($w) > 2; });
            $imageWords = array_filter(explode(' ', $cleanImage), function($w) { return strlen($w) > 2; });
            
            // Check for word matches
            foreach ($turkishWords as $word) {
                foreach ($imageWords as $imgWord) {
                    if (strpos($imgWord, $word) !== false || strpos($word, $imgWord) !== false) {
                        $score += strlen($word) > 3 ? 3 : 2;
                    }
                    if ($word === $imgWord) {
                        $score += 5;
                    }
                }
            }
            
            foreach ($englishWords as $word) {
                foreach ($imageWords as $imgWord) {
                    if (strpos($imgWord, $word) !== false || strpos($word, $imgWord) !== false) {
                        $score += strlen($word) > 3 ? 2 : 1;
                    }
                    if ($word === $imgWord) {
                        $score += 3;
                    }
                }
            }
            
            // Bonus for exact substring matches
            if (strpos($cleanImage, $cleanTurkish) !== false) $score += 10;
            if (strpos($cleanImage, $cleanEnglish) !== false) $score += 8;
            
            if ($score > $bestScore) {
                $bestScore = $score;
                $bestMatch = $imageFile;
                $bestMatchIndex = $imgIndex;
            }
        }
        
        // If we found a reasonable match (score > 1), link it
        if ($bestMatch && $bestScore > 1) {
            $photoPath = '/storage/foods/' . $bestMatch;
            $updateStmt->execute([$photoPath, $food['id']]);
            
            echo sprintf("Linked: %s -> %s (score: %d)\n", 
                substr($food['turkish_description'], 0, 40), 
                $bestMatch, 
                $bestScore
            );
            
            $linkedCount++;
            
            // Remove the used image from available list
            unset($availableImages[$bestMatchIndex]);
            $availableImages = array_values($availableImages);
        }
        
        // If we've processed a lot, just assign remaining images randomly to remaining foods
        if ($index > 0 && $index % 20 === 0 && !empty($availableImages)) {
            echo "Randomly assigning remaining images...\n";
            $randomImage = array_shift($availableImages);
            $photoPath = '/storage/foods/' . $randomImage;
            $updateStmt->execute([$photoPath, $food['id']]);
            $linkedCount++;
            echo sprintf("Random: %s -> %s\n", 
                substr($food['turkish_description'], 0, 40), 
                $randomImage
            );
        }
    }
    
    echo "\n=== Linking Complete ===\n";
    echo "Successfully linked $linkedCount images to food items\n";
    
    // Final statistics
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM food");
    $total = $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    
    $stmt = $pdo->query("SELECT COUNT(*) as with_photos FROM food WHERE photo IS NOT NULL AND photo != ''");
    $withPhotos = $stmt->fetch(PDO::FETCH_ASSOC)['with_photos'];
    
    echo "Total food items: $total\n";
    echo "Food items with photos: $withPhotos\n";
    echo "Coverage: " . round(($withPhotos / $total) * 100, 1) . "%\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
