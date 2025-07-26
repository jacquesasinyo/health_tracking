<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
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
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(route('food.create')); ?>" class="btn btn-success">
                            <i class="fas fa-plus me-2"></i>Add Food
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <form method="GET" action="<?php echo e(route('food.index')); ?>">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control form-control-lg" placeholder="Yiyecek ara (Türkçe)" value="<?php echo e(request('search')); ?>">
                        <button class="btn btn-primary btn-lg" type="submit">
                            <i class="fas fa-search me-2"></i>Ara
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <?php if($food->photo): ?>
                            <img src="<?php echo e(asset($food->photo)); ?>" class="card-img-top" alt="<?php echo e($food->description); ?>" style="height: 200px; object-fit: cover;">
                        <?php else: ?>
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <i class="fas fa-utensils fa-3x text-muted"></i>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo e($food->turkish_description ?? $food->description); ?></h5>
                            <div class="nutrition-preview">
                                <?php $__currentLoopData = $food->nutrients->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nutrient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <small class="text-muted d-block">
                                        <i class="fas fa-info-circle me-1"></i>
                                        <?php echo e($nutrient->nutrient_name); ?>: <?php echo e($nutrient->amount); ?><?php echo e($nutrient->unit_name); ?>

                                    </small>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="mt-3">
                                <a href="<?php echo e(route('food.show', $food)); ?>" class="btn btn-primary">
                                    <i class="fas fa-eye me-2"></i>Show Details
                                </a>

                                <?php if(auth()->guard()->check()): ?>
                                    <div class="btn-group mt-2 w-100">
                                        <a href="<?php echo e(route('food.edit', ['food' => $food, 'page' => $foods->currentPage()])); ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit me-1"></i>Edit
                                        </a>
                                        <form action="<?php echo e(route('food.destroy', $food)); ?>" method="POST" style="display: inline;" class="flex-fill">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure you want to delete this food item?')">
                                                <i class="fas fa-trash me-1"></i>Delete
                                            </button>
                                        </form>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <?php echo e($foods->appends(request()->query())->links()); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/WD Elements/web projects/health/nutrition-website-main/resources/views/foods/index.blade.php ENDPATH**/ ?>