@extends('layouts.app')

@section('title', 'MuscleMap - ' . ucfirst($muscle))

@section('sidebar')
    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link align-middle px-0">
                <i class="fa fa-home"></i> <span class="ms-1 d-sm-inline">Home</span>
            </a>
        </li>
        <li>
            <a href="#exercises" class="nav-link px-0 align-middle">
                <i class="fa fa-dumbbell"></i> <span class="ms-1 d-sm-inline">Exercises</span>
            </a>
        </li>
        <li>
            <a href="#stretches" class="nav-link px-0 align-middle">
                <i class="fa fa-arrows-alt"></i> <span class="ms-1 d-sm-inline">Stretches</span>
            </a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4">{{ ucfirst($muscle) }} Exercises</h1>
                <p>Explore exercises and stretches for your {{ $muscle }}.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 id="exercises">Exercises</h2>
                <div class="row">
                    @foreach($exercises as $exercise)
                        <div class="col-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $exercise->name }}</h5>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="exercise-gif-container">
                                                <img src="{{ asset($exercise->image) }}" class="img-fluid" alt="{{ $exercise->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="steps-to-perform">
                                                <h3>Steps To Perform</h3>
                                                <div class="exercise-instructions">
                                                    @php
                                                        // Process the description to put each numbered step on a new line
                                                        $description = $exercise->description;
                                                        // Replace number patterns like "1.", "2.", etc., with line breaks followed by the number
                                                        $formattedDescription = preg_replace('/(\d+\.\s)/', '<br>$1', $description);
                                                        // Remove the first <br> if it starts with a number
                                                        $formattedDescription = preg_replace('/^<br>/', '', $formattedDescription);
                                                    @endphp
                                                    {!! $formattedDescription !!}
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4">
                                                <span class="badge bg-primary me-2">{{ ucfirst($exercise->difficulty) }}</span>
                                                @if($exercise->equipment)
                                                    <span class="badge bg-secondary">{{ ucfirst($exercise->equipment) }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @if($stretches->count() > 0)
            <div class="row mt-4">
                <div class="col-12">
                    <h2 id="stretches">Stretches</h2>
                    <div class="row">
                        @foreach($stretches as $stretch)
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                @if($stretch->image)
                                                    <div class="exercise-gif-container">
                                                        <img src="{{ asset($stretch->image) }}" class="img-fluid rounded" alt="{{ $stretch->name }}">
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="card-title">{{ $stretch->name }}</h5>
                                                <div class="stretch-instructions">
                                                    @php
                                                        // Process the description to put each numbered step on a new line
                                                        $description = $stretch->description;
                                                        // Replace number patterns like "1.", "2.", etc., with line breaks followed by the number
                                                        $formattedDescription = preg_replace('/(\d+\.\s)/', '<br>$1', $description);
                                                        // Remove the first <br> if it starts with a number
                                                        $formattedDescription = preg_replace('/^<br>/', '', $formattedDescription);
                                                    @endphp
                                                    {!! $formattedDescription !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>

    <style>

        #sidebar {
  position: fixed;
  z-index: 1050; /* Higher z-index to ensure it's above content */
  height: 100vh;
  background-color: #212529; /* Match your existing sidebar color */
  padding-top: 20px;
}

        /* Overall page styling */
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #111416; /* Changed to dark blue */
            margin-bottom: 0.5rem;
        }
        
        h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #090b0c; /* Changed to dark blue */
            margin: 1.5rem 0 1rem;
        }
        
        /* Exercise container styling */
        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            overflow: hidden;
            background-color: #fff;
        }
        
        .card-body {
            padding: 1.5rem;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;
        }
        
        /* Exercise image container */
        .exercise-gif-container {
            height: 450px;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            border: 1px solid #01a2e0; /* Added light blue border */
            border-radius: 8px;
        }
        
        .exercise-gif-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Changed from 'contain' to 'cover' */
            border-radius: 6px;
        }
        
        /* Exercise content styling */
        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #1163a9; /* Changed to dark blue */
            margin-bottom: 1.2rem;
        }
        
        .card-text {
            color: #555;
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            max-width: 100%;
            white-space: normal;
            overflow-wrap: break-word;
            word-wrap: break-word;
            word-break: break-word;
        }
        
        /* Steps section */
        .steps-to-perform {
            background-color: #fff;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1rem;
            border: 1px solid #eee;
            width: 100%;
            box-sizing: border-box;
            max-width: 100%;
        }
        
        .steps-to-perform h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1163a9; /* Changed to dark blue */
            margin-bottom: 1.2rem;
        }
        
        .steps-to-perform ol {
            padding-left: 1.2rem;
            max-width: 100%;
            margin-right: 0;
            box-sizing: border-box;
        }
        
        .steps-to-perform ol li {
            margin-bottom: 1rem;
            line-height: 1.5;
            max-width: 100%;
            word-wrap: break-word;
            word-break: break-word;
        }
        
        /* Specific fix for exercise instructions */
        .exercise-instructions,
        .stretch-instructions {
            max-width: 100%;
            white-space: normal !important;
            overflow-wrap: break-word !important;
            word-wrap: break-word !important;
            word-break: break-word !important;
            display: block;
            padding-right: 10px;
            line-height: 1.8;
            color: #555;
            font-size: 1.05rem;
        }

        /* Add spacing between numbered steps */
        .exercise-instructions br,
        .stretch-instructions br {
            display: block;
            margin-top: 0.8rem;
            content: "";
        }

        /* Ensure steps don't get cut off */
        .col-md-7 {
            flex: 0 0 auto;
            width: 58.33333333%;
            box-sizing: border-box;
            padding-right: 20px;
        }
        
        .col-md-8 {
            flex: 0 0 auto;
            width: 66.66666667%;
            box-sizing: border-box;
            padding-right: 20px;
        }

        /* Prevent text from being cut off at edges */
        @media (min-width: 768px) {
            .exercise-instructions,
            .stretch-instructions {
                padding-right: 15px;
                max-width: 80%;
            }
        }
        
        /* Mistakes section */
        .mistakes-to-avoid {
            background-color: #fff;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1rem;
            border: 1px solid #eee;
        }
        
        .mistakes-to-avoid h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1163a9; /* Changed to dark blue */
            margin-bottom: 1.2rem;
        }
        
        .mistakes-to-avoid ul {
            padding-left: 1.2rem;
        }
        
        .mistakes-to-avoid ul li {
            margin-bottom: 1rem;
            line-height: 1.5;
        }
        
        /* Badge styling */
        .badge {
            font-weight: 500;
            padding: 0.5em 1em;
            border-radius: 50px;
            font-size: 0.85rem;
        }
        
        .badge.bg-primary {
            background-color: #1163a9 !important; /* Changed to dark blue */
        }
        
        .badge.bg-secondary {
            background-color: #01a2e0 !important; /* Changed to light blue */
        }
        
        @media (max-width: 768px) {
            .exercise-gif-container {
                height: 300px;
                margin-bottom: 1rem;
            }
            
            .card-body .row {
                flex-direction: column;
            }
            
            .card-body .col-md-4,
            .card-body .col-md-5,
            .card-body .col-md-7,
            .card-body .col-md-8 {
                width: 100%;
                padding-right: 10px;
                padding-left: 10px;
            }
            
            .steps-to-perform {
                padding: 1rem;
            }
            
            .exercise-instructions,
            .stretch-instructions {
                padding-right: 5px;
                font-size: 1rem;
                line-height: 1.6;
            }
        }
        /* Add to your muscle show page's style section */
        #exercises, #stretches {
            scroll-margin-top: 80px; /* Add space for fixed header */
            padding-left: 20px; /* Prevent content from being hidden */
            position: relative;
            z-index: 500; /* Lower than sidebar's z-index */
        }

        /* Ensure content stays within bounds */
        .container-fluid.px-4 {
            margin-left: 250px !important;
            width: calc(100% - 250px) !important;
            overflow-x: hidden; /* Prevent horizontal overflow */
        }

        /* Reinforce sidebar layering */
        #menu {
            z-index: 1000 !important; /* Higher than content */
            box-shadow: 2px 0 10px rgba(0,0,0,0.1); /* Visual separation */
        }

        /* Add smooth scrolling behavior */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px; 
        }
        
    </style>

    
@endsection
