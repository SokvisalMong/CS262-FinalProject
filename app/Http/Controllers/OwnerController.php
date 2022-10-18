<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OwnerController extends Controller
{
    //
    public function Home() {
        return view('owner.home');
    }

    public function SignIn() {
        return view('owner.signin');
    } 

    public function Dashboard() {
        return view('owner.dashboard');
    }

    public function CreateRestaurant() {
        return view('owner.createrestaurant');
    }

    public function Restaurant() {
        return view('owner.restaurant');
    }
}
