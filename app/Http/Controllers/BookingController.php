<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function AddBooking(Request $request){
        $booking = new Booking();
        
        $booking->booking_status = $request->booking_status;
        $booking->booking_date   = $request->booking_date;
        $booking->booking_time   = $request->booking_time;
        $booking->party_size     = $request->party_size;

        $booking-> save();
        return back()->with('success', 'Data is inserted');
    }

    public function ShowBooking(){
        $booking_db = DB::select("select * from bookings");

        return view('dataview.booking', ["v_bookings" => $booking_db]);
    }
}
