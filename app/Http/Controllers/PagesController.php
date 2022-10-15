<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function signin(){
        return view('signin');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function restaurantlist(){
        return view('restaurantlist');
    }
}
