@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nutrition</li>
                    </ol>
                </nav>
                
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-apple-alt fa-2x text-success me-3"></i>
                        <div>
                            <h1 class="mb-0">Nutrition Database</h1>
                            <p class="text-muted mb-0">Explore detailed nutritional information for various foods</p>
                        </div>
                    </div>
                    @auth
                        <a href="{{ route('food.create') }}" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i>Add Food
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <form method="GET" action="{{ route('food.index') }}">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control form-control-lg" placeholder="Yiyecek ara (Türkçe)" value="{{ request('search') }}">
                        <button class="btn btn-primary btn-lg" type="submit">
                            <i class="fas fa-search me-2"></i>Ara
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach($foods as $food)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($food->photo)
                            <img src="{{ asset($food->photo) }}" class="card-img-top" alt="{{ $food->description }}" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <i class="fas fa-utensils fa-3x text-muted"></i>
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $food->turkish_description ?? $food->description }}</h5>
                            <div class="nutrition-preview">
                                @foreach($food->nutrients->take(3) as $nutrient)
                                    <small class="text-muted d-block">
                                        <i class="fas fa-info-circle me-1"></i>
                                        {{ $nutrient->nutrient_name }}: {{ $nutrient->amount }}{{ $nutrient->unit_name }}
                                    </small>
                                @endforeach
                            </div>

                            <div class="mt-3">
                                <a href="{{ route('food.show', $food) }}" class="btn btn-primary">
                                    <i class="fas fa-eye me-2"></i>Show Details
                                </a>

                                @auth
                                    <div class="btn-group mt-2 w-100">
                                        <a href="{{ route('food.edit', ['food' => $food, 'page' => $foods->currentPage()]) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit me-1"></i>Edit
                                        </a>
                                        <form action="{{ route('food.destroy', $food) }}" method="POST" style="display: inline;" class="flex-fill">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure you want to delete this food item?')">
                                                <i class="fas fa-trash me-1"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $foods->appends(request()->query())->links() }}
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }
        
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .nutrition-preview {
            min-height: 60px;
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
        
        .btn-group {
            gap: 5px;
        }
    </style>
@endsection
