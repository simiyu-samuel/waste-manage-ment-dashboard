{{-- resources/views/vehicles/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Vehicle Details</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> {{ $vehicle->id }}</li>
        <li class="list-group-item"><strong>License Plate:</strong> {{ $vehicle->license_plate }}</li>
        <li class="list-group-item"><strong>Model:</strong> {{ $vehicle->model }}</li>
        <li class="list-group-item"><strong>Driver Name:</strong> {{ $vehicle->driver_name }}</li>
    </ul>
    <a href="{{ route('vehicles.index') }}" class="btn btn-secondary mt-3">Back to Vehicles</a>
</div>
@endsection
