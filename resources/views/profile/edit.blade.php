@extends('layouts.page')

@section('title', 'Homepage - ' . config('app.name'))

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Edit Profile</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('profile.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', $user->phone) }}">
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="profile_picture">Profile Picture</label>
                    <input type="file" class="form-control" name="profile_picture" id="profile_picture">
                    @error('profile_picture')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea class="form-control" name="bio" id="bio" rows="3">{{ old('bio', $user->bio) }}</textarea>
                    @error('bio')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary my-2">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
