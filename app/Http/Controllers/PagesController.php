<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home() {
        return view('home');
    }

    public function SignIn() {
        return view('signin');
    }

    public function Dashboard() {
        return view('dashboard.dashboard');
    }

    public function RestaurantList() {
        return view('restaurantlist');
    }
}
