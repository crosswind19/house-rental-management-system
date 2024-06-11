@extends('admin.layouts.app')

@section('title', 'Property Types')

@section('content')
<div class="container">
    <h1>Property Types</h1>
    <a href="{{ route('admin.property-types.create') }}" class="btn btn-primary mb-3">Add Property Type</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propertyTypes as $propertyType)
                <tr>
                    <td>{{ $propertyType->id }}</td>
                    <td>{{ $propertyType->name }}</td>
                    <td>
                        <a href="{{ route('admin.property-types.edit', $propertyType->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.property-types.destroy', $propertyType->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection