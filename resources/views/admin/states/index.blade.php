@extends('admin.layouts.app')

@section('title', 'States')

@section('content')
<div class="container">
    <h1>States</h1>
    <a href="{{ route('admin.states.create') }}" class="btn btn-primary mb-3">Add State</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($states as $state)
                <tr>
                    <td>{{ $state->id }}</td>
                    <td>{{ $state->name }}</td>
                    <td>
                        <a href="{{ route('admin.states.edit', $state->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.states.destroy', $state->id) }}" method="POST" style="display:inline-block;">
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
