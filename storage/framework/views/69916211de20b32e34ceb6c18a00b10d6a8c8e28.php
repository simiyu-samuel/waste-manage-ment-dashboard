

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2 class="my-4">Add New Waste Collection</h2>

        <form action="<?php echo e(route('waste-collections.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="collection_time">Collection Time</label>
                <input type="datetime-local" class="form-control" id="collection_time" name="collection_time" required>
            </div>
            <div class="form-group">
                <label for="vehicle_id">Vehicle</label>
                <select class="form-control" id="vehicle_id" name="vehicle_id">
                    <option value="">Unassigned</option>
                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Collection</button>
            <a href="<?php echo e(route('waste-collections.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/waste-collections/create.blade.php ENDPATH**/ ?>