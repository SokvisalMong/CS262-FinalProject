<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // admin page
    public function home() {
        return view('admin.home');
    }

    // admin login page
    public function login() {
        return view('admin.login');
    }
    
    // admin register page
    public function register() {
        return view('admin.register');
    }

    // store function for to create admin account
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        Admin::create($formFields);
        // admin.localhost/tables/admins
        return redirect('/tables/admins')->with('message', 'New admin account has been created.');
    }

    // admin login authentication
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        if(auth('admin')->attempt($formFields)) {
            // generate new session id
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        }
        // show 'Invalid Credentials' when user enter wroong email/password
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // admin logout function
    public function logout(Request $request) {
        auth('admin')->logout();

        // invalidate delete the session file/id
        $request->session()->invalidate();
        // regenerating new crsf token
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    // admin list page 
    public function showtable() {
        $admin_db = Admin::all();

        return view('admin.table', ["v_admin" => $admin_db]);
    }

    // delete admin account
    public function destroy(Admin $admin) {
        $admin->delete();

        return back()->with('message', 'Admin has been deleted');
    }
}
