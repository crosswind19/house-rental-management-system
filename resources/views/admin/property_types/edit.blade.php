@extends('admin.layouts.app')

@section('title', 'Edit Property Type')

@section('content')
<div class="container">
    <h1>Edit Property Type</h1>
    <form action="{{ route('admin.property-types.update', $propertyType->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $propertyType->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection