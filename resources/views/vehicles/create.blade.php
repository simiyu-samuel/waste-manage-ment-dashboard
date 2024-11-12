{{-- resources/views/vehicles/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vehicles.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                {{-- Vehicle Name --}}
                <div class="form-group mb-3">
                    <label for="name">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" required>
                    <div class="invalid-feedback">Please enter a vehicle name.</div>
                </div>

                {{-- Vehicle Model --}}
                <div class="form-group mb-3">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="form-control" required>
                    <div class="invalid-feedback">Please enter the vehicle model.</div>
                </div>

                {{-- License Plate --}}
                <div class="form-group mb-3">
                    <label for="license_plate">License Plate</label>
                    <input type="text" name="license_plate" class="form-control" required>
                    <div class="invalid-feedback">Please enter the license plate number.</div>
                </div>

                {{-- Capacity --}}
                <div class="form-group mb-3">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" class="form-control" required>
                    <div class="invalid-feedback">Please enter the capacity.</div>
                </div>

                {{-- Driver Name --}}
                <div class="form-group mb-3">
                    <label for="driver_name">Driver Name</label>
                    <input type="text" name="driver_name" class="form-control" required>
                    <div class="invalid-feedback">Please enter the driver’s name.</div>
                </div>

                {{-- Status --}}
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                    <div class="invalid-feedback">Please select a status.</div>
                </div>

                {{-- Submit --}}
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
@endsection