<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ShowAdmin() {
        // Query Database
        $admin = DB::select("select * from admins by ord_id desc");
        //JSON
        return response()‐>json(
            [
                "admins" => $admin
            ],200);
    }
    public function ShowRestaurant() {
        // Query Database
        $restaurant = DB::select("select * from restaurants by ord_id desc");
        //JSON
        return response()‐>json(
            [
                "restaurants" => $restaurant
            ],200);
    }
    public function ShowBooking() {
        // Query Database
        $booking = DB::select("select * from bookings by ord_id desc");
        //JSON
        return response()‐>json(
            [
                "bookings" => $booking
            ],200);
    }
    public function ShowUser() {
        // Query Database
        $user = DB::select("select * from users by ord_id desc");
        //JSON
        return response()‐>json(
            [
                "users" => $user
            ],200);
    }
}
