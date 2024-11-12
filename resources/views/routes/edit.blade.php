{{-- resources/views/routes/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Route</h2>
    <form action="{{ route('routes.update', $route->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Route Name</label>
            <input type="text" name="name" class="form-control" value="{{ $route->name }}" required>
        </div>
        <div class="form-group">
            <label for="start_point">Starting Point</label>
            <input type="text" name="starting_point" class="form-control" value="{{ $route->starting_point }}" required>
        </div>
        <div class="form-group">
            <label for="end_point">End Point</label>
            <input type="text" name="end_point" class="form-control" value="{{ $route->end_point }}" required>
        </div>
        <div class="form-group">
            <label for="coordinates">Coordinates</label>
            <input type="text" name="coordinates" class="form-control" value="{{ $route->coordinates }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Route</button>
    </form>
</div>
@endsection
