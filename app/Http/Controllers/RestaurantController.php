<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function AddRestaurant(Request $request){
        $restaurant = new Restaurant();

        $restaurant->restaurant_name    = $request->restaurant_name;
        $restaurant->payment_options    = $request->payment_options;
        $restaurant->hours_of_operation = $request->hours_of_operation;
        $restaurant->cuisines           = $request->cuisines;
        $restaurant->dress_code         = $request->dress_code;
        $restaurant->restaurant_website = $request->restaurant_website;
        $restaurant->restaurant_mobile  = $request->restaurant_mobile;
        $restaurant->restaurant_email   = $request->restaurant_email;
        $restaurant->price_range_lower  = $request->price_range_lower;
        $restaurant->price_range_higher = $request->price_range_higher;
        
        $restaurant->save();
        return back();
    }

    public function ShowRestaurant(){
        $restaurant_db = DB::select("select * from restaurants");

        return view('dashboard.restauranttable', ["v_restaurants" => $restaurant_db]);
    }
}
