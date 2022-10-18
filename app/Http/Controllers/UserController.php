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
        return view('users.login');
    }

    public function register() {
        return view('user.register');
    }

    // Creates a user account and logs them in immediately
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone' => ['required', 'numeric', 'min:10']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in.');
    }
}
