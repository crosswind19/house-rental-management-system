<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    private function getLayout()
    {
        $user = auth()->user();

        if ($user->roles == 1) {
            return 'admin.layouts.app';
        } elseif ($user->roles == 2) {
            return 'agent.layouts.app';
        } else {
            return 'layouts.app';
        }
    }

    public function index()
    {

        $user = auth()->user();

        if ($user->roles == 1) {
            // Admin: Display all properties
            $bookings = Booking::all();
        } else {
            // Agent and User: Display properties based on the user's ID
            $bookings = Booking::where('user_id', $user->id)->get();
        }

        $layout = $this->getLayout();
        return view('booking.index', compact('bookings'));
    }


    public function checkAvailability(Request $request, $propertyId)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $property = Property::findOrFail($propertyId);

        $existingBooking = Booking::where('property_id', $property->id)
                                    ->where('date', $request->date)
                                    ->where('time', $request->time)
                                    ->first();

        if ($existingBooking) {
            return back()->with(['availability' => 'unavailable']);
        }

        return back()->with(['availability' => 'available', 'date' => $request->date, 'time' => $request->time]);
    }

    public function store(Request $request, $propertyId)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $property = Property::findOrFail($propertyId);

        $booking = new Booking();
        $booking->property_id = $property->id;
        $booking->user_id = Auth::id();
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->save();

        return redirect()->route('property', $property->id)->with('success', 'Booking registered successfully.');
    }

    public function manageBookings()
    {
        $user = Auth::user();
        $layout = $this->getLayout();

        // Fetch bookings for properties managed by the current user
        $bookings = Booking::whereHas('property', function($query) use ($user) {
            $query->where('user_id', $user->id);
            // ->orWhere('agent_id', $user->id);
        })->with('tenant', 'property')->get();

        return view('booking.manage', compact('bookings','layout'));
    }

    public function updateBookingStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->handled_by = Auth::id();
        $booking->save();

        return back()->with('success', 'Booking status updated successfully.');
    }

    public function tenantBookings()
    {
        $user = Auth::user();

        // Fetch bookings made by the current tenant
        $bookings = Booking::where('user_id', $user->id)->with('property', 'handler')->get();

        return view('bookings.tenant', compact('bookings'));
    }
}
