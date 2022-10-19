<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OwnerController extends Controller
{
    // Pages
    public function home() {
        return view('owner.home');
    }

    public function login() {
        return view('owner.login');
    }

    public function register() {
        return view('owner.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('owners', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $owner = Owner::create($formFields);

        auth('owner')->login($owner);

        return redirect('/')->with('message', 'Owner created and logged in.');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if(auth('owner')->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth('owner')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    public function showtable() {
        $owner_db = Owner::all();

        return view('owner.table', ["v_owner" => $owner_db]);
    }

    public function destroy(Owner $owner) {
        $owner->delete();

        return back()->with('message', 'Owner has been deleted.');
    }
}
