<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MuscleController;
use Illuminate\Support\Facades\Route;

// Homepage - show main dashboard
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Guest Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/foods/create', [FoodController::class, 'create'])->name('food.create');
    Route::post('/foods', [FoodController::class, 'store'])->name('food.store');
    Route::get('/foods/{food}/edit', [FoodController::class, 'edit'])->name('food.edit');
    Route::put('/foods/{food}', [FoodController::class, 'update'])->name('food.update');
    Route::delete('/foods/{food}', [FoodController::class, 'destroy'])->name('food.destroy');
});

// Public Routes
Route::get('/food/{food}', [FoodController::class, 'show'])->name('food.show');
Route::get('/foods', [FoodController::class, 'index'])->name('food.index');

// Test route to debug images
Route::get('/test-images', function () {
    $exercises = App\Models\Exercise::where('muscle_group', 'chest')->get();
    return view('test-images', compact('exercises'));
});

// Muscle/Workout Routes
Route::get('/muscles', [MuscleController::class, 'index'])->name('muscles.index');
Route::get('/muscles/map', [MuscleController::class, 'muscleMap'])->name('muscles.map');
Route::get('/muscles/{muscle}', [MuscleController::class, 'show'])
    ->name('muscles.show')
    ->where('muscle', 'chest|abs|biceps|triceps|forearms|shoulders|traps|lats|obliques|quads|calves|hamstrings|glutes|upperback|lowerback');

