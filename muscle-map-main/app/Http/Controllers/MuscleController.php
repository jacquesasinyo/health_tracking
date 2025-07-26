<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Stretch;
use Illuminate\Http\Request;

class MuscleController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function show($muscle)
    {
        $exercises = Exercise::where('muscle_group', $muscle)->get();
        $stretches = Stretch::where('muscle_group', $muscle)->get();

        return view('pages.muscle', compact('muscle', 'exercises', 'stretches'));
    }

    public function muscleMap()
    {
        return view('pages.musclemap');
    }
}
