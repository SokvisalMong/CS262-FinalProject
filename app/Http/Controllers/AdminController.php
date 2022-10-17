<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use phpseclib3\Crypt\RC2;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function AddAdmin(Request $request){
        // $admin = new Admin();

        // $admin->admin_username = $request->admin_username;
        // $admin->admin_email    = $request->admin_email;
        // $admin->admin_password = $request->admin_password;

        // $admin-> save();
        // return back();
        $formFields = $request->validate([
            'admin_username' => 'required',
            'admin_email' => ['required', 'email', Rule::unique('admins', 'admin_email')],
            'admin_password' => ['required', 'confirmed', 'min:8'],
        ]);

        $formFields['admin_password'] = bcrypt($formFields['admin_password']);

        $admin = Admin::create($formFields);

        auth('admin')->login($admin);

        return redirect('/')->with('message', 'Admin has been created and logged in.');
    }

    public function LogIn(Request $request) {
        $request->validate([
            'admin_email' => ['required', 'email'],
            'admin_password' => 'required'
        ]);

        if(auth('admin')->attempt(['admin_email' => $request->admin_email, 'password' => $request->admin_password])) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        };

        return back()->withErrors(['admin_email' => 'Invalid Credentials'])->onlyInput('admin_email');
    }

    public function LogOut(Request $request) {
        auth('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    public function Update(Request $request, Admin $admin) {
        if($admin->admin_id != auth('admin')->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'admin_email' => ['required', 'email', Rule::unique('admins', 'admin_email')],
            'admin_password' => ['required', 'confirmed', 'min:8'],
            'admin_username' => 'required',
        ]);

        $formFields['admin_password'] = bcrypt($formFields['admin_password']);

        $admin->update($formFields);

        return back()->with('message', 'Admin account has been updated successfully.');
    }

    public function ShowAdmin(){
        $admin_db = DB::select("select * from admins");

        return view('dashboard.admintable', ["v_admins" => $admin_db]);
    }
}
