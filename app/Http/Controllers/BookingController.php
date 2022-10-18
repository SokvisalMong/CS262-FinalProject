<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Pages
    public function booking() {
        return view('booking.booking');
    }

    public function store(Request $request, Restaurant $restaurant) {    
        $formFields = $request->validate([
            'date' => ['required', 'date_format:o:m:d'],
            'time' => ['required', 'date_format:H:i:s'],
            'size' => ['required', 'numeric'],

            'user_id' => auth()->user()->id,
            'restaurant_id' => $restaurant->restaurant_id,
        ]);

        Booking::create($formFields);
        
        return back()->with('message', 'Booking has been created.');
    }
}
