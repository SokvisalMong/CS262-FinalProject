<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // Pages
    public function home() {
        return view('admin.home');
    }

    public function login() {
        return view('admin.login');
    }
    
    public function register() {
        return view('admin.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        Admin::create($formFields);

        return redirect('/dashboard')->with('message', 'New admin account has been created.');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if(auth('admin')->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    public function showtable() {
        $admin_db = Admin::all();

        return view('admin.table', ["v_admin" => $admin_db]);
    }

    public function destroy(Admin $admin) {
        $admin->delete();

        return back()->with('message', 'Admin has been deleted');
    }
}
