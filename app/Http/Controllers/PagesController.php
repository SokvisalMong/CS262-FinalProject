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

    public function HomeDash(){
        return view('dashboard.homedash');
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
}
