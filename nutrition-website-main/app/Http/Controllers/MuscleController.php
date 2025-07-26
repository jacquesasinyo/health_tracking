<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Stretch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MuscleController extends Controller
{
    public function index()
    {
        return view('muscles.index');
    }

    public function show($muscle)
    {
        // Debug: Check if we're getting the muscle parameter correctly
        Log::info("Accessing muscle: " . $muscle);
        
        $exercises = Exercise::where('muscle_group', $muscle)->get();
        $stretches = Stretch::where('muscle_group', $muscle)->get();
        
        // Debug: Check how many exercises and stretches we found
        Log::info("Found exercises: " . $exercises->count());
        Log::info("Found stretches: " . $stretches->count());
        
        // Debug: Log first exercise image path
        if ($exercises->count() > 0) {
            Log::info("First exercise image: " . $exercises->first()->image);
        }

        return view('muscles.show', compact('muscle', 'exercises', 'stretches'));
    }

    public function muscleMap()
    {
        return view('muscles.musclemap');
    }
}
