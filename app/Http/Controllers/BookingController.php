<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function AddBooking(Request $request){
        $booking = new Booking();
        $booking-> booking_status = $request->booking_status;
        $booking-> booking_date = $request->booking_date;
        $booking-> party_size = $request->party_size;

        $booking-> save();
        return back()->with('success', 'Data is inserted');
    }

    public function ShowBooking(){
        $booking_db = DB::select("select * from bookings");

        return view('', ["v_bookings" => $booking_db]);
    }
}
