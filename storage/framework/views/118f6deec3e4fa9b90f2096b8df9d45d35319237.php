


<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Routes List</h2>
    <a href="<?php echo e(route('routes.create')); ?>" class="btn btn-primary mb-3">Add New Route</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Route Name</th>
                <th>Starting Point</th>
                <th>End Point</th>
                <th>Coordinates</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $routes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($route->id); ?></td>
                <td><?php echo e($route->name); ?></td>
                <td><?php echo e($route->starting_point); ?></td>
                <td><?php echo e($route->end_point); ?></td>
                <td><?php echo e($route->coordinates); ?></td>
                <td>
                    <a href="<?php echo e(route('routes.show', $route->id)); ?>" class="btn btn-info btn-sm">View</a>
                    <a href="<?php echo e(route('routes.edit', $route->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('routes.destroy', $route->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/routes/index.blade.php ENDPATH**/ ?>