<?php
require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__ . '/database/database.sqlite',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// Check food items with photos
$foods = Capsule::table('food')
    ->whereNotNull('photo')
    ->where('photo', '!=', '')
    ->select('id', 'turkish_description', 'description', 'photo')
    ->get();

echo "Found " . count($foods) . " food items with photos:\n\n";

foreach ($foods as $food) {
    echo "ID: {$food->id}\n";
    echo "Turkish: {$food->turkish_description}\n";
    echo "English: {$food->description}\n";
    echo "Photo: {$food->photo}\n";
    echo "Photo exists: " . (file_exists(public_path($food->photo)) ? 'YES' : 'NO') . "\n";
    echo "---\n";
}

// Check available images in storage
echo "\nImages in storage/app/public/foods:\n";
$storageImages = scandir(__DIR__ . '/storage/app/public/foods');
$imageCount = count(array_filter($storageImages, function($file) {
    return !in_array($file, ['.', '..']) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
}));
echo "Total images: $imageCount\n";

// Check if public/storage symlink exists
echo "\nPublic storage symlink: " . (is_link(__DIR__ . '/public/storage') ? 'EXISTS' : 'NOT EXISTS') . "\n";

function public_path($path = '') {
    return __DIR__ . '/public' . ($path ? '/' . ltrim($path, '/') : '');
}
