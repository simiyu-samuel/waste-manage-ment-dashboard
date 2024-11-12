


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Vehicle Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> <?php echo e($vehicle->id); ?></li>
        <li class="list-group-item"><strong>License Plate:</strong> <?php echo e($vehicle->license_plate); ?></li>
        <li class="list-group-item"><strong>Model:</strong> <?php echo e($vehicle->model); ?></li>
        <li class="list-group-item"><strong>Driver Name:</strong> <?php echo e($vehicle->driver_name); ?></li>
    </ul>
    <a href="<?php echo e(route('vehicles.index')); ?>" class="btn btn-secondary mt-3">Back to Vehicles</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/vehicles/show.blade.php ENDPATH**/ ?>