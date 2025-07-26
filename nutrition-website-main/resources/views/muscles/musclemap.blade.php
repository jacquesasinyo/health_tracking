@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-5 fw-bold text-primary">
                <i class="fas fa-dumbbell me-2"></i>Interactive Muscle Map
            </h1>
            <p class="lead text-muted">Click on any muscle group to explore targeted exercises</p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="muscle-map-container">
                <img src="{{ asset('images/musclemap.png') }}" alt="Interactive Muscle Map" usemap="#musclemap" class="img-fluid shadow-lg rounded">
                
                <map name="musclemap">
                    <!-- Front View Areas -->
                    <area shape="poly" coords="149,203,215,215,215,198,180,166,149,203" href="{{ route('muscles.show', 'chest') }}" alt="Chest" title="Chest Exercises">
                    <area shape="poly" coords="117,274,157,211,147,204,117,274" href="{{ route('muscles.show', 'biceps') }}" alt="Biceps" title="Bicep Exercises">
                    <area shape="poly" coords="127,207,184,161,150,200,127,207" href="{{ route('muscles.show', 'shoulders') }}" alt="Shoulders" title="Shoulder Exercises">
                    <area shape="poly" coords="216,374,252,268,186,222,216,374" href="{{ route('muscles.show', 'abs') }}" alt="Abs" title="Abdominal Exercises">
                    <area shape="poly" coords="163,325,214,387,182,338,163,325" href="{{ route('muscles.show', 'quads') }}" alt="Quads" title="Quadricep Exercises">
                    <area shape="poly" coords="162,633,186,523,167,647,162,633" href="{{ route('muscles.show', 'calves') }}" alt="Calves" title="Calf Exercises">
                    
                    <!-- Back View Areas -->
                    <area shape="poly" coords="533,229,577,216,553,267,533,229" href="{{ route('muscles.show', 'triceps') }}" alt="Triceps" title="Tricep Exercises">
                    <area shape="poly" coords="575,206,697,316,590,211,575,206" href="{{ route('muscles.show', 'lats') }}" alt="Lats" title="Lat Exercises">
                    <area shape="poly" coords="641,251,683,145,647,239,641,251" href="{{ route('muscles.show', 'upperback') }}" alt="Upper Back" title="Upper Back Exercises">
                    <area shape="poly" coords="605,313,676,312,605,311,605,313" href="{{ route('muscles.show', 'lowerback') }}" alt="Lower Back" title="Lower Back Exercises">
                    <area shape="poly" coords="585,318,704,368,595,313,585,318" href="{{ route('muscles.show', 'glutes') }}" alt="Glutes" title="Glute Exercises">
                    <area shape="poly" coords="564,505,635,404,568,487,564,505" href="{{ route('muscles.show', 'hamstrings') }}" alt="Hamstrings" title="Hamstring Exercises">
                </map>
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-6 mb-4">
            <div class="card bg-primary text-white h-100">
                <div class="card-body text-center">
                    <i class="fas fa-eye fa-3x mb-3"></i>
                    <h5 class="card-title">Front View</h5>
                    <p class="card-text">Click on muscle groups to explore exercises for chest, biceps, shoulders, abs, quads, and more.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card bg-secondary text-white h-100">
                <div class="card-body text-center">
                    <i class="fas fa-eye-slash fa-3x mb-3"></i>
                    <h5 class="card-title">Back View</h5>
                    <p class="card-text">Explore back muscle groups including triceps, lats, upper back, lower back, glutes, and hamstrings.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .muscle-map-container {
        position: relative;
        display: inline-block;
        max-width: 100%;
    }
    
    .muscle-map-container img {
        max-width: 100%;
        height: auto;
    }
    
    area:hover {
        cursor: pointer;
    }
    
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    }
    
    @media (max-width: 768px) {
        .muscle-map-container img {
            width: 100%;
        }
    }
</style>
@endsection
