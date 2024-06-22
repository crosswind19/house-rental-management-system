@extends($layout)

@section('title', 'Manage Bookings')

@section('content')
<div class="container">
    <h1>Manage Bookings</h1>

    @foreach ($bookings as $booking)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $booking->property->property_name }}</h5>
                <p><strong>Tenant:</strong> {{ $booking->tenant->name }}</p>
                <p><strong>Date:</strong> {{ $booking->date }}</p>
                <p><strong>Time:</strong> {{ $booking->time }}</p>
                <p><strong>Status:</strong> {{ $booking->status }}</p>
                <p><strong>Message:</strong> {{ $booking->message }}</p>
                <form action="{{ route('bookings.updateStatus', $booking->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="accepted" {{ $booking->status == 'accepted' ? 'selected' : '' }}>Accept</option>
                            <option value="rejected" {{ $booking->status == 'rejected' ? 'selected' : '' }}>Reject</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Update Status</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
