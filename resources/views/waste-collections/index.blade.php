@extends('layouts.app')

@section('content')
<h2>Waste Collections</h2>
<a href="{{ route('waste-collections.create') }}" class="btn btn-primary mb-3">Add New Collection</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Location</th>
            <th>Collection Time</th>
            <th>Vehicle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($wasteCollections as $collection)
        <tr>
            <td>{{ $collection->id }}</td>
            <td>{{ $collection->location }}</td>
            <td>{{ $collection->collection_time }}</td>
            <td>{{ $collection->vehicle ? $collection->vehicle->name : 'Unassigned' }}</td>
            <td>
                <a href="{{ route('waste-collections.edit', $collection) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('waste-collections.destroy', $collection) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection