<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Food Nutrition Database</h1>

        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        <?php endif; ?>

        <form method="GET" action="<?php echo e(route('food.index')); ?>">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search food items" value="<?php echo e(request('search')); ?>">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="row">
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <?php if($food->photo): ?>
                            <img src="<?php echo e(asset($food->photo)); ?>" class="card-img-top" alt="<?php echo e($food->description); ?>" style="height: 200px; object-fit: cover;">
                        <?php else: ?>
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                <span class="text-muted">No image</span>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($food->description ?? $food->turkish_description); ?></h5>
                            <p class="card-text">
                                <?php $__currentLoopData = $food->nutrients->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nutrient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($nutrient->nutrient_name); ?>: <?php echo e($nutrient->amount); ?><?php echo e($nutrient->unit_name); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>

                            <a href="<?php echo e(route('food.show', $food)); ?>" class="btn btn-primary">View Details</a>

                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('food.edit', ['food' => $food, 'page' => $foods->currentPage()])); ?>" class="btn btn-warning">Edit</a>
                                <form action="<?php echo e(route('food.destroy', $food)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this food item?')">Delete</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination">
                    <?php if($foods->onFirstPage()): ?>
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($foods->previousPageUrl()); ?>">Previous</a></li>
                    <?php endif; ?>

                    <?php $__currentLoopData = $foods->getUrlRange(1, $foods->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="page-item <?php echo e($foods->currentPage() == $page ? 'active' : ''); ?>">
                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($foods->hasMorePages()): ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($foods->nextPageUrl()); ?>">Next</a></li>
                    <?php else: ?>
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jacques/Desktop/nutrition-website-main/resources/views/foods/index.blade.php ENDPATH**/ ?>