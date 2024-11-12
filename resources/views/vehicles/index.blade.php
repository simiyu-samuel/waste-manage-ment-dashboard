{{-- resources/views/vehicles/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Vehicle List</h2>
    <a href="{{ route('vehicles.create') }}" class="btn btn-primary mb-3">Add New Vehicle</a>

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
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->license_plate }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->status }}</td>
                    <td>{{ $vehicle->driver_name }}</td>
                    <td>
                        <a href="{{ route('vehicles.show', $vehicle->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection