<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
    //
    public function Home() {
        return view('dev.home');
    }

    public function SignIn() {
        return view('dev.signin');
    }

    public function Register() {
        return view('dev.register');
    }

    public function Dashboard() {
        return view('dashboard.dashboard');
    }

    public function AdminForm(){
        return view('dashboard.adminform');
    }

    public function BookingForm(){
        return view('dashboard.bookingform');
    }

    public function RestaurantForm(){
        return view('dashboard.restaurantform');
    }

    public function UserForm(){
        return view('dashboard.userform');
    }
}
