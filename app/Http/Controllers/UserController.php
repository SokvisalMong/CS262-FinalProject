<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Pages
    public function home() {
        return view('user.home');
    }

    public function login() {
        return view('users.login');
    }

    public function register() {
        return view('user.register');
    }
}
