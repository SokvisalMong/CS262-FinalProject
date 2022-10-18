<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function AddBooking(Request $request, Restaurant $restaurant){
        $booking = new Booking();
        
        $booking->booking_status = $request->booking_status;
        $booking->booking_date   = $request->booking_date;
        $booking->booking_time   = $request->booking_time;
        $booking->party_size     = $request->party_size;

        $booking->user_id        = auth()->user()->user_id;
        $booking->restaurant_id  = $restaurant->restaurant_id;

        $booking-> save();
        return back();
    }

    public function ShowBooking(){
        $booking_db = DB::select("select * from bookings");

        return view('dashboard.bookingtable', ["v_bookings" => $booking_db]);
    }

    public function Booking(Request $request, Restaurant $restaurant) {
        $formFields = $request->validate([
            'booking_date' => ['required','date_format:o:m:d'],
            'booing_time' => ['required', 'date_format:H:i:s'],
            'party_size' => ['required','numeric'],

            'user_id' => auth('web')->user()->user_id,
            'restaurant_id' => $restaurant->restaurant_id,
        ]);

        Booking::create($formFields);

        return back()->with('message', 'Booking has been created.');
    }
}
