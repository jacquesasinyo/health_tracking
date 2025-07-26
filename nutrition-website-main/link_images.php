<?php

// Simple script to link existing images to food items
echo "=== Linking Food Images ===\n\n";

try {
    // Database connection
    $pdo = new PDO('sqlite:database/database.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get all food items
    $stmt = $pdo->query("SELECT id, turkish_description, description, photo FROM food ORDER BY id");
    $foods = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "Found " . count($foods) . " food items in database\n";
    
    // Get all images
    $storageDir = 'storage/app/public/foods';
    $images = array_diff(scandir($storageDir), ['.', '..']);
    $imageFiles = array_filter($images, function($file) {
        return preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
    });
    
    echo "Found " . count($imageFiles) . " image files in storage\n\n";
    
    $linkedCount = 0;
    $updateStmt = $pdo->prepare("UPDATE food SET photo = ? WHERE id = ?");
    
    // Simple matching: match keywords in food names with image names
    foreach ($foods as $food) {
        if (!empty($food['photo'])) {
            continue; // Skip if already has photo
        }
        
        $turkish = strtolower($food['turkish_description'] ?? '');
        $english = strtolower($food['description'] ?? '');
        
        // Try to find matching image
        $bestMatch = null;
        $bestScore = 0;
        
        foreach ($imageFiles as $imageFile) {
            $imageName = strtolower(pathinfo($imageFile, PATHINFO_FILENAME));
            
            $score = 0;
            
            // Simple keyword matching
            $turkishWords = explode(' ', $turkish);
            $englishWords = explode(' ', $english);
            $imageWords = preg_split('/[^a-z0-9]+/', $imageName);
            
            foreach ($turkishWords as $word) {
                if (strlen($word) > 3) {
                    foreach ($imageWords as $imageWord) {
                        if (strlen($imageWord) > 3 && (strpos($imageWord, $word) !== false || strpos($word, $imageWord) !== false)) {
                            $score += 2;
                        }
                    }
                }
            }
            
            foreach ($englishWords as $word) {
                if (strlen($word) > 3) {
                    foreach ($imageWords as $imageWord) {
                        if (strlen($imageWord) > 3 && (strpos($imageWord, $word) !== false || strpos($word, $imageWord) !== false)) {
                            $score += 1;
                        }
                    }
                }
            }
            
            if ($score > $bestScore) {
                $bestScore = $score;
                $bestMatch = $imageFile;
            }
        }
        
        if ($bestMatch && $bestScore > 0) {
            $photoPath = '/storage/foods/' . $bestMatch;
            $updateStmt->execute([$photoPath, $food['id']]);
            echo "Linked: {$food['turkish_description']} -> $bestMatch (score: $bestScore)\n";
            $linkedCount++;
            
            // Remove the image from the list to avoid duplicates
            $imageFiles = array_filter($imageFiles, function($img) use ($bestMatch) {
                return $img !== $bestMatch;
            });
        }
    }
    
    echo "\n=== Linking Complete ===\n";
    echo "Successfully linked $linkedCount images to food items\n";
    
    // Show final stats
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM food WHERE photo IS NOT NULL AND photo != ''");
    $finalCount = $stmt->fetch(PDO::FETCH_ASSOC)['count'];
    echo "Total food items with photos: $finalCount\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
