@extends('layouts.page')

@section('title', 'Profile - ' . config('app.name'))

@section('content')

<div class="container mt-5 py-5">
    <div class="card">
        <div class="card-header">
            <h2>{{ $user->name }}'s Profile</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="pb-1 h-75">
                        <img class="img-fluid bg-cover h-100" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/profilepic/default-profile.png') }}" alt="Profile Picture">
                    </div>
                </div>
                <div class="col-md-8">
                    <h4>Name: {{ $user->name }}</h4>
                    <p>Email: {{ $user->email }}</p>
                    <p>Phone: {{ $user->phone }}</p>
                    <p>Joined: {{ $user->created_at->format('d M Y') }}</p>
                    <p>Role: {{ $user->roles == 1 ? 'Admin' : ($user->roles == 2 ? 'Agent' : 'User') }}</p>
                    @if($user->roles == 2 && $user->agency)
                        <p>Agency: {{ $user->agency->name }}</p>
                        <p>REN Tag: {{ $user->ren_tag }}</p>
                    @endif
                    <p>Bio: {{ $user->bio }}</p>
                    <a href="{{ route('profile.edit', $user) }}" class="btn btn-primary mt-3">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
