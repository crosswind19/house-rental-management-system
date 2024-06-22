@extends('admin.layouts.app')

@section('title', 'Edit State')

@section('content')
<div class="container">
    <h1>Edit State</h1>
    <form action="{{ route('admin.states.update', $state->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $state->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
