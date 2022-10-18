<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    // Pages
    public function edit(Restaurant $restaurant) {
        return view('restaurant.edit', ['restaurant' => $restaurant]);
    }

}
