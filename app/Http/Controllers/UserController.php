<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Creates a new user and immediately logs them in
    public function AddUser(Request $request) {
        // $user = new User();

        // $user->user_email     = $request->user_email;
        // $user->user_password  = $request->user_password;
        // $user->user_firstname = $request->user_firstname;
        // $user->user_lastname  = $request->user_lastname;
        // $user->user_mobile    = $request->user_mobile;

        // $user->save();
        // return back()->with('success', 'Data is inserted');
    
        $formFields = $request->validate([
            'user_email' => ['required', 'email', Rule::unique('users', 'user_email')],
            'user_password' => ['required', 'confirmed', 'min:8'],
            'user_mobile' => 'required'
        ]);

        $formFields['user_password'] = bcrypt($formFields['user_password']);
    
        $user = User::create($formFields);
    
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }

    // Logs the user out
    public function LogOut(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    // Logs the user in with the provided email and password
    public function LogIn(Request $request) {
        $formFields = $request->validate([
            'user_email' => ['required', 'email'],
            'user_password' => 'required'
        ]);

        if(auth()->attempt(['user_email' => $request->user_email, 'password' => $request->user_password])) {
        //if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        };

        return back()->withErrors(['user_email' => 'Invalid Credentials'])->onlyInput('user_email');
    }

    // Returns all data in the 'users' table
    public function ShowUser() {
        $user_db = DB::select("select * from users");

        return view('dashboard.usertable', ["v_users" => $user_db]);
    }
}
