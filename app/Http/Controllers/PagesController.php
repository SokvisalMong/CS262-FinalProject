<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home() {
        return view('home');
    }

    public function Dashboard() {
        return view('dashboard.dashboard');
    }

    public function RestaurantList() {
        return view('restaurantlist');
    }

    public function Register() {
        return view('users.register');
    }

    public function SignIn() {
        return view('users.signin');
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
