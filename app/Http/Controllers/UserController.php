<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function AddUser(Request $request){
        $user = new User();
        $user-> user_email = $request->user_email;
        $user-> user_password = $request->user_password;
        $user-> user_firstname = $request->user_firstname;
        $user-> user_lastname = $request->user_lastname;
        $user-> user_mobile = $request->user_mobile;
        $user-> save();
        return back()->with('success', 'Data is inserted');
    }

    public function ShowUser(){
        $user_db = DB::select("select * from users");

        return view('', ["v_users" => $user_db]);
    }
}
