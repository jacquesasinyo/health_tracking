@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('muscles.index') }}">Workouts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($muscle) }}</li>
                </ol>
            </nav>
            
            <div class="d-flex align-items-center mb-4">
                <i class="fas fa-dumbbell fa-2x text-primary me-3"></i>
                <div>
                    <h1 class="mb-0">{{ ucfirst($muscle) }} Training</h1>
                    <p class="text-muted mb-0">Explore exercises and stretches for your {{ $muscle }}.</p>
                </div>
            </div>
        </div>
    </div>

    @if($exercises->count() > 0)
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">
                    <i class="fas fa-dumbbell text-primary me-2"></i>Exercises
                </h2>
                <div class="row">
                    @foreach($exercises as $exercise)
                        <div class="col-12 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $exercise->name }}</h5>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="exercise-gif-container">
                                                @if($exercise->image)
                                                    <img src="{{ asset($exercise->image) }}" class="img-fluid rounded" alt="{{ $exercise->name }}">
                                                @else
                                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 200px;">
                                                        <i class="fas fa-dumbbell fa-3x text-muted"></i>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="steps-to-perform">
                                                <h6 class="text-success mb-3">
                                                    <i class="fas fa-list-ol me-2"></i>Steps To Perform
                                                </h6>
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
                                                <span class="badge bg-primary me-2">
                                                    <i class="fas fa-signal me-1"></i>{{ ucfirst($exercise->difficulty) }}
                                                </span>
                                                @if($exercise->equipment)
                                                    <span class="badge bg-secondary">
                                                        <i class="fas fa-tools me-1"></i>{{ ucfirst($exercise->equipment) }}
                                                    </span>
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
    @endif

    @if($stretches->count() > 0)
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="mb-4">
                    <i class="fas fa-hands text-warning me-2"></i>Stretches
                </h2>
                <div class="row">
                    @foreach($stretches as $stretch)
                        <div class="col-12 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            @if($stretch->image)
                                                <div class="exercise-gif-container">
                                                    <img src="{{ asset($stretch->image) }}" class="img-fluid rounded" alt="{{ $stretch->name }}">
                                                </div>
                                            @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 150px;">
                                                    <i class="fas fa-hands fa-3x text-muted"></i>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="card-title text-warning">{{ $stretch->name }}</h5>
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
                                            
                                            <div class="mt-3">
                                                <span class="badge bg-info me-2">
                                                    <i class="fas fa-clock me-1"></i>{{ $stretch->duration }}
                                                </span>
                                                <span class="badge bg-success">
                                                    <i class="fas fa-signal me-1"></i>{{ ucfirst($stretch->difficulty) }}
                                                </span>
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

    @if($exercises->count() === 0 && $stretches->count() === 0)
        <div class="row">
            <div class="col-12">
                <div class="card bg-light">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-info-circle fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">No exercises or stretches found</h4>
                        <p class="text-muted">We're working on adding exercises for this muscle group. Check back soon!</p>
                        <a href="{{ route('muscles.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Muscle Map
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<style>
    .card {
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    }
    
    .exercise-gif-container {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 8px;
        padding: 10px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .card:hover .exercise-gif-container {
        background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        transform: scale(1.05);
    }
    
    .exercise-gif-container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }
    
    .card:hover .exercise-gif-container::before {
        transform: translateX(100%);
    }
    
    .exercise-instructions, .stretch-instructions {
        line-height: 1.6;
        color: #555;
        transition: color 0.3s ease;
    }
    
    .card:hover .exercise-instructions,
    .card:hover .stretch-instructions {
        color: #333;
    }
    
    .breadcrumb {
        background: none;
        padding: 0;
        margin-bottom: 1rem;
    }
    
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: #6c757d;
    }
    
    .badge {
        font-size: 0.85rem;
        padding: 0.5em 0.75em;
        transition: all 0.3s ease;
    }
    
    .card:hover .badge {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    .card-title {
        transition: all 0.3s ease;
    }
    
    .card:hover .card-title {
        transform: translateX(5px);
    }
    
    .steps-to-perform h6 {
        transition: all 0.3s ease;
    }
    
    .card:hover .steps-to-perform h6 {
        color: #28a745 !important;
        transform: scale(1.05);
    }
    
    /* Image hover effects */
    .exercise-gif-container img {
        transition: all 0.3s ease;
        border-radius: 4px;
    }
    
    .card:hover .exercise-gif-container img {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    
    /* Pulse effect for icons */
    .card:hover .fas {
        animation: pulse 1.5s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    /* Stagger animation for multiple cards */
    .card:nth-child(even):hover {
        transform: translateY(-5px) scale(1.02) rotate(0.5deg);
    }
    
    .card:nth-child(odd):hover {
        transform: translateY(-5px) scale(1.02) rotate(-0.5deg);
    }
</style>
@endsection
