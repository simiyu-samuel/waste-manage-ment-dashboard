{{-- resources/views/vehicles/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Vehicle</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                
                {{-- Vehicle Name --}}
                <div class="form-group mb-3">
                    <label for="name">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $vehicle->name }}" required>
                    <div class="invalid-feedback">Please enter a vehicle name.</div>
                </div>

                {{-- Vehicle Model --}}
                <div class="form-group mb-3">
                    <label for="model">Model</label>
                    <input type="text" name="model" class="form-control" value="{{ $vehicle->model }}" required>
                    <div class="invalid-feedback">Please enter the vehicle model.</div>
                </div>

                {{-- License Plate --}}
                <div class="form-group mb-3">
                    <label for="license_plate">License Plate</label>
                    <input type="text" name="license_plate" class="form-control" value="{{ $vehicle->license_plate }}" required>
                    <div class="invalid-feedback">Please enter the license plate number.</div>
                </div>

                {{-- Capacity --}}
                <div class="form-group mb-3">
                    <label for="capacity">Capacity</label>
                    <input type="number" name="capacity" class="form-control" value="{{ $vehicle->capacity }}" required>
                    <div class="invalid-feedback">Please enter the capacity.</div>
                </div>

                {{-- Driver Name --}}
                <div class="form-group mb-3">
                    <label for="driver_name">Driver Name</label>
                    <input type="text" name="driver_name" class="form-control" value="{{ $vehicle->driver_name }}" required>
                    <div class="invalid-feedback">Please enter the driver’s name.</div>
                </div>

                {{-- Status --}}
                <div class="form-group mb-3">
                    <label for="status">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="Active" {{ $vehicle->status == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ $vehicle->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        <option value="Maintenance" {{ $vehicle->status == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                    </select>
                    <div class="invalid-feedback">Please select a status.</div>
                </div>

                {{-- Submit --}}
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
@endsection
