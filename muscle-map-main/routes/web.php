<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleController;

Route::get('/', [MuscleController::class, 'index'])->name('home');
Route::get('/musclemap', [MuscleController::class, 'muscleMap'])->name('musclemap');

// Muscle group routes
Route::get('/muscles/{muscle}', [MuscleController::class, 'show'])
    ->name('muscle.show')
    ->where('muscle', 'chest|abs|biceps|triceps|forearms|shoulders|traps|lats|obliques|quads|calves|hamstrings|glutes|upperback|lowerback');
