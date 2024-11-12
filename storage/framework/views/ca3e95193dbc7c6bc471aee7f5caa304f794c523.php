


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Route</h2>
    <form action="<?php echo e(route('routes.update', $route->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Route Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($route->name); ?>" required>
        </div>
        <div class="form-group">
            <label for="start_point">Starting Point</label>
            <input type="text" name="starting_point" class="form-control" value="<?php echo e($route->starting_point); ?>" required>
        </div>
        <div class="form-group">
            <label for="end_point">End Point</label>
            <input type="text" name="end_point" class="form-control" value="<?php echo e($route->end_point); ?>" required>
        </div>
        <div class="form-group">
            <label for="coordinates">Coordinates</label>
            <input type="text" name="coordinates" class="form-control" value="<?php echo e($route->coordinates); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Route</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/routes/edit.blade.php ENDPATH**/ ?>