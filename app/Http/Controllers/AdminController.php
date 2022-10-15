<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddAdmin(Request $request){
        $admin = new Booking();
        $admin-> admin_username = $request->admin_username;
        $admin-> admin_email = $request->admin_email;
        $admin-> admin_password = $request->admin_password;

        $admin-> save();
        return back()->with('success', 'Data is inserted');
    }

    public function ShowAdmin(){
        $admin_db = DB::select("select * from admins");

        return view('', ["v_admins" => $admin_db]);
    }
}
