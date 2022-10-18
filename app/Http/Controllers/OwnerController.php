<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

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
            'owner_password' => ['required', 'confirmed', 'min:8'],
        ]);

        $formFields['owner_password'] = bcrypt($formFields['owner_password']);

        $owner = Owner::create($formFields);

        auth('owner')->login($owner);

        return redirect('/dashboard')->with('message', 'Owner has been created and logged in.');
    }

    public function LogIn(Request $request) {
        $request->validate([
            'owner_email' => ['required', 'email'],
            'owner_password' => 'required',
        ]);

        if(auth('owner')->attempt(['owner_email' => $request->owner_email, 'password' => $request->owner_password])) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['owner_email' => 'Invalid Credentials'])->onlyInput('owner_email');
    }

    public function LogOut(Request $request) {
        auth('owner')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.'); 
    }

    public function Update(Request $request) {
        $formFields = $request->validate([
            'owner_password' => ['required', 'confirmed'],
            'owner_mobile' => ['required'],
            'owner_firstname' => 'nullable',
            'owner_lastname' => 'nullable',
        ]);

        DB::update('update owners set owner_firstname = ?, owner_lastname = ?, owner_mobile = ?', [$formFields['owner_firstname'], $formFields['owner_lastname'], $formFields['owner_mobile']]);

        return back()->with('message', 'Owner account has been updated successfully.');
    }
    
    public function ShowOwner() {
        $owner_db = DB::select("select * from owners");

        return view('dashboard.ownertable', ["v_owners" => $owner_db]);
    }
}
