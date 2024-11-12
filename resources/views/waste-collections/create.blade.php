@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Add New Waste Collection</h2>

        <form action="{{ route('waste-collections.store') }}" method="POST">
            @csrf
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
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Collection</button>
            <a href="{{ route('waste-collections.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
