


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Add New Route</h2>
    <form action="<?php echo e(route('routes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Route Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="starting_point">Starting Point</label>
            <input type="text" name="starting_point" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_point">End Point</label>
            <input type="text" name="end_point" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="coordinates">Coordinates</label>
            <input type="text" name="coordinates" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Route</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/routes/create.blade.php ENDPATH**/ ?>