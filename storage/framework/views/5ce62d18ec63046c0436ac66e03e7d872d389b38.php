


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Route Details</h2>
    <div class="card p-4">
        
        <div class="form-group">
            <label>Route Name:</label>
            <input type="text" class="form-control" value="<?php echo e($route->name); ?>" readonly>
        </div>
        <div class="form-group">
            <label>Starting Point:</label>
            <input type="text" class="form-control" value="<?php echo e($route->starting_point); ?>" readonly>
        </div>
        <div class="form-group">
            <label>End_point:</label>
            <input type="text" class="form-control" value="<?php echo e($route->end_point); ?>" readonly>
        </div>
        <div class="form-group">
            <label>Coordinates:</label>
            <input type="text" class="form-control" value="<?php echo e($route->coordinates); ?>" readonly>
        </div>
    </div>
    <a href="<?php echo e(route('routes.index')); ?>" class="btn btn-secondary">Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/routes/show.blade.php ENDPATH**/ ?>