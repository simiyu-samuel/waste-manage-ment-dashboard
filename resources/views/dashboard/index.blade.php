@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Waste Collections</h5>
                <p class="card-text">{{ $totalCollections }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Routes</h5>
                <p class="card-text">{{ $totalRoutes }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Vehicles</h5>
                <p class="card-text">{{ $totalVehicles }}</p>
            </div>
        </div>
    </div>
</div>
@endsection