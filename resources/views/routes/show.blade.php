{{-- resources/views/routes/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Route Details</h2>
    <div class="card p-4">
        {{-- <div class="card-body">
            <h5 class="card-title">Route: {{ $route->name }}</h5>
            <p><strong>Starting Point:</strong> {{ $route->start_point }}</p>
            <p><strong>End Point:</strong> {{ $route->end_point }}</p>
            <a href="{{ route('routes.index') }}" class="btn btn-secondary">Back to Routes</a>
        </div> --}}
        <div class="form-group">
            <label>Route Name:</label>
            <input type="text" class="form-control" value="{{ $route->name}}" readonly>
        </div>
        <div class="form-group">
            <label>Starting Point:</label>
            <input type="text" class="form-control" value="{{ $route->starting_point}}" readonly>
        </div>
        <div class="form-group">
            <label>End_point:</label>
            <input type="text" class="form-control" value="{{ $route->end_point}}" readonly>
        </div>
        <div class="form-group">
            <label>Coordinates:</label>
            <input type="text" class="form-control" value="{{ $route->coordinates}}" readonly>
        </div>
    </div>
    <a href="{{ route('routes.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
