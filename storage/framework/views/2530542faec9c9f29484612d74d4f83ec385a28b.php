


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('vehicles.store')); ?>" method="POST" class="needs-validation" novalidate>
                <?php echo csrf_field(); ?>
                
                <div class="form-group mb-3">
                    <label for="name">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" required>
                    <div class="invalid-feedback">Please enter a vehicle name.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="form-control" required>
                    <div class="invalid-feedback">Please enter the vehicle model.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="license_plate">License Plate</label>
                    <input type="text" name="license_plate" class="form-control" required>
                    <div class="invalid-feedback">Please enter the license plate number.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" class="form-control" required>
                    <div class="invalid-feedback">Please enter the capacity.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="driver_name">Driver Name</label>
                    <input type="text" name="driver_name" class="form-control" required>
                    <div class="invalid-feedback">Please enter the driver’s name.</div>
                </div>

                
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                    <div class="invalid-feedback">Please select a status.</div>
                </div>

                
                <button type="submit" class="btn btn-primary w-100">Save Vehicle</button>
            </form>
        </div>
    </div>
</div>

<script>
    // JavaScript for Bootstrap validation
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waste_management\resources\views/vehicles/create.blade.php ENDPATH**/ ?>