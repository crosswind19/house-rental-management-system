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
                    <img src="{{ $user->profile_picture ? Storage::url($user->profile_picture) : asset('assets/images/default-profile.png') }}" alt="{{ $user->name }}" class="img-fluid rounded-circle">
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
