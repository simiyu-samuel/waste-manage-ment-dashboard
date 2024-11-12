

<?php $__env->startSection('content'); ?>
<h2>Waste Collections</h2>
<a href="<?php echo e(route('waste-collections.create')); ?>" class="btn btn-primary mb-3">Add New Collection</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Collection Time</th>
            <th>Vehicle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $wasteCollections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($collection->id); ?></td>
            <td><?php echo e($collection->location); ?></td>
            <td><?php echo e($collection->collection_time); ?></td>
            <td><?php echo e($collection->vehicle ? $collection->vehicle->name : 'Unassigned'); ?></td>
            <td>
                <a href="<?php echo e(route('waste-collections.edit', $collection)); ?>" class="btn btn-sm btn-warning">Edit</a>
                <form action="<?php echo e(route('waste-collections.destroy', $collection)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/waste-collections/index.blade.php ENDPATH**/ ?>