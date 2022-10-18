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

    public function AddOwner(Request $request) {
        $formFields = $request->validate([
            'owner_email' => ['required', 'email', Rule::unique('owners', 'owner_email')],
            'owner_mobile' => 'required',
            'owner_password' => 'required',
        ]);

        $formFields['owner_password'] = bcrypt($formFields['owner_password']);

        $owner = Owner::create($formFields);

        auth('owner')->login($owner);

        return redirect('/dashboard')->with('message', 'Owner has been created and logged in.');
    }
}
