


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Vehicle List</h2>
    <a href="<?php echo e(route('vehicles.create')); ?>" class="btn btn-primary mb-3">Add New Vehicle</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>License Plate</th>
                <th>Model</th>
                <th>Driver</th>
                <th>status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($vehicle->id); ?></td>
                    <td><?php echo e($vehicle->name); ?></td>
                    <td><?php echo e($vehicle->license_plate); ?></td>
                    <td><?php echo e($vehicle->model); ?></td>
                    <td><?php echo e($vehicle->status); ?></td>
                    <td><?php echo e($vehicle->driver_name); ?></td>
                    <td>
                        <a href="<?php echo e(route('vehicles.show', $vehicle->id)); ?>" class="btn btn-info btn-sm">View</a>
                        <a href="<?php echo e(route('vehicles.edit', $vehicle->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('vehicles.destroy', $vehicle->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/vehicles/index.blade.php ENDPATH**/ ?>