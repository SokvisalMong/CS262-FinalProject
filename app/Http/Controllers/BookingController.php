<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Pages
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

    public function showtable() {
        $booking_db = Booking::all();

        return view('booking.table', ["v_booking" => $booking_db]);
    }
}
