<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home() {
        return view('home');
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

    public function Edit() {
        return view('users.edit');
    }
}
