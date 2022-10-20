<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    // Pages
    public function show() {
        /** @var \App\Models\User $user **/
        $user = auth('web')->user();
        $bookings = $user->booking()->get();
        return view('booking.bookings', ['bookings' => $bookings]);        
    }

    public function getRestaurantBooking() {
        /** @var \App\Models\Owner $owner */
        $owner = auth('owner')->user();
        /** @var \App\Models\Restaurant $restaurant */
        $restaurant = $owner->restaurant()->first();
        $bookings = $restaurant->booking()->get();

        return view('booking.ownertable', ['bookings' => $bookings]);
    }

    public function store(Request $request, Restaurant $restaurant) {    
        $formFields = $request->validate([
            'status' => 'nullable',
            'date' => ['required', 'date_format:o:m:d'],
            'time' => ['required', 'date_format:H:i:s'],
            'size' => ['required', 'numeric'],
        ]);

        $formFields['status'] = 'Active';
        $formFields['user_id'] = auth()->id;
        $formFields['restaurant_id'] = $restaurant->id;

        Booking::create($formFields);
        
        return back()->with('message', 'Booking has been created.');
    }

    public function cancel(Booking $booking) {
        if(auth()->id() != $booking->user_id) {
            abort(403, 'Unauthorized Action');
        }

        $booking->update([
            'status' => 'Canceled',
        ]);

        return back()->with('message', 'Booking has been canceled.');
    }

    public function ownerCancel(Booking $booking) {
        $owner_id = $booking->restaurant()->first()->id;

        if(auth('owner')->id() != $owner_id) {
            abort(403, 'Unauthorized Action');
        }

        $booking->update([
            'status' => 'Canceled',
        ]);

        return back()->with('message', 'Booking has been canceled.');
    }

    public function complete(Booking $booking) {
        $owner_id = $booking->restaurant()->first()->id;

        if(auth('owner')->id() != $owner_id) {
            abort(403, 'Unauthorized Action');
        }

        $booking->update([
            'status' => 'Completed',
        ]);

        return back()->with('message', 'Booking has been completed');
    }


    public function showtable() {
        $booking_db = Booking::all();

        return view('booking.table', ["v_booking" => $booking_db]);
    }

    public function destroy(Booking $booking) {
        $booking->delete();

        return back()->with('message', 'Booking has been deleted');
    }
}