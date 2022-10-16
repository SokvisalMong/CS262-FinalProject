<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function AddAdmin(Request $request){
        $admin = new Admin();

        $admin->admin_username = $request->admin_username;
        $admin->admin_email    = $request->admin_email;
        $admin->admin_password = $request->admin_password;

        $admin-> save();
        return view('dashboard.adminform');
    }

    public function ShowAdmin(){
        $admin_db = DB::select("select * from admins");

        return view('dashboard.admintable', ["v_admins" => $admin_db]);
    }
}
