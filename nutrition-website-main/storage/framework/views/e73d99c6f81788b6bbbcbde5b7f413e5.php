<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Health Tracker</h1>
            <p class="lead text-muted">Your complete health and fitness companion</p>
        </div>
    </div>
    
    <div class="row justify-content-center g-4">
        <!-- Workout Section -->
        <div class="col-md-5">
            <div class="card h-100 shadow-lg border-0">
                <div class="card-body text-center p-5">
                    <div class="mb-4">
                        <i class="fas fa-dumbbell fa-4x text-primary"></i>
                    </div>
                    <h3 class="card-title fw-bold mb-3">Workout Tracker</h3>
                    <p class="card-text text-muted mb-4">
                        Explore exercises based on muscle groups. Click on body parts to see targeted exercises with visual demos and step-by-step instructions.
                    </p>
                    <a href="<?php echo e(route('muscles.index')); ?>" class="btn btn-primary btn-lg px-4">
                        Start Workout
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Nutrition Section -->
        <div class="col-md-5">
            <div class="card h-100 shadow-lg border-0">
                <div class="card-body text-center p-5">
                    <div class="mb-4">
                        <i class="fas fa-apple-alt fa-4x text-success"></i>
                    </div>
                    <h3 class="card-title fw-bold mb-3">Nutrition Tracker</h3>
                    <p class="card-text text-muted mb-4">
                        Track your food intake with detailed nutritional information. Monitor calories, proteins, fats, and other nutrients to make smarter food choices.
                    </p>
                    <a href="<?php echo e(route('food.index')); ?>" class="btn btn-success btn-lg px-4">
                        Track Nutrition
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/WD Elements/web projects/health/nutrition-website-main/resources/views/dashboard.blade.php ENDPATH**/ ?>