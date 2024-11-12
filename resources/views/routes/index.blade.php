{{-- resources/views/routes/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Routes List</h2>
    <a href="{{ route('routes.create') }}" class="btn btn-primary mb-3">Add New Route</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Route Name</th>
                <th>Starting Point</th>
                <th>End Point</th>
                <th>Coordinates</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($routes as $route)
            <tr>
                <td>{{ $route->id }}</td>
                <td>{{ $route->name }}</td>
                <td>{{ $route->starting_point }}</td>
                <td>{{ $route->end_point }}</td>
                <td>{{ $route->coordinates }}</td>
                <td>
                    <a href="{{ route('routes.show', $route->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('routes.edit', $route->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('routes.destroy', $route->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
