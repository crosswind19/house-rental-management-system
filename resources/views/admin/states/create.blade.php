@extends('admin.layouts.app')

@section('title', 'Add State')

@section('content')
<div class="container">
    <h1>Add State</h1>
    <form action="{{ route('admin.states.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
