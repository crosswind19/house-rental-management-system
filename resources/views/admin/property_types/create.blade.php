@extends('admin.layouts.app')

@section('title', 'Add Property Type')

@section('content')
<div class="container">
    <h1>Add Property Type</h1>
    <form action="{{ route('admin.property-types.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
