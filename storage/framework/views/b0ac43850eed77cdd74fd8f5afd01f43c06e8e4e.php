


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('vehicles.update', $vehicle->id)); ?>" method="POST" class="needs-validation" novalidate>
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                
                
                <div class="form-group mb-3">
                    <label for="name">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($vehicle->name); ?>" required>
                    <div class="invalid-feedback">Please enter a vehicle name.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="form-control" value="<?php echo e($vehicle->model); ?>" required>
                    <div class="invalid-feedback">Please enter the vehicle model.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="license_plate">License Plate</label>
                    <input type="text" name="license_plate" class="form-control" value="<?php echo e($vehicle->license_plate); ?>" required>
                    <div class="invalid-feedback">Please enter the license plate number.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" class="form-control" value="<?php echo e($vehicle->capacity); ?>" required>
                    <div class="invalid-feedback">Please enter the capacity.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="driver_name">Driver Name</label>
                    <input type="text" name="driver_name" class="form-control" value="<?php echo e($vehicle->driver_name); ?>" required>
                    <div class="invalid-feedback">Please enter the driver’s name.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Active" <?php echo e($vehicle->status == 'Active' ? 'selected' : ''); ?>>Active</option>
                        <option value="Inactive" <?php echo e($vehicle->status == 'Inactive' ? 'selected' : ''); ?>>Inactive</option>
                        <option value="Maintenance" <?php echo e($vehicle->status == 'Maintenance' ? 'selected' : ''); ?>>Maintenance</option>
                    </select>
                    <div class="invalid-feedback">Please select a status.</div>
                </div>

                
                <button type="submit" class="btn btn-warning w-100">Update Vehicle</button>
            </form>
        </div>
    </div>
</div>

<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/vehicles/edit.blade.php ENDPATH**/ ?>