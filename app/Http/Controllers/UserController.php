<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Pages
    public function home() {
        return view('user.home');
    }

    public function login() {
        return view('user.login');
    }

    public function register() {
        return view('user.register');
    }

    public function edit() {
        return view('user.edit')->with('user', auth()->user());
    }

    // Creates a user account and logs them in immediately
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone' => ['required', 'numeric', 'min:10', Rule::unique('users', 'phone')]
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function update(Request $request) {
        $user = auth()->user();

        $request->validate([
            'name'      => ['required', 'min:3'],
            'phone'     => ['required', 'numeric', 'min:10'],
            'firstname' => 'nullable',
            'lastname'  => 'nullable'
        ]);

        $user->name      = $request->name;
        $user->phone     = $request->phone;
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;

        /** @var \App\Models\User $user **/
        $user->save();
        
        return back()->with('message', 'User account has been updated.');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    public function showtable() {
        $user_db = User::all();

        return view('user.table', ["v_user" => $user_db]);
    }
}
