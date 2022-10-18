<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RestaurantController extends Controller
{
    // Pages
    public function edit(Restaurant $restaurant) {
        return view('restaurant.edit', ['restaurant' => $restaurant]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('restaurants', 'name')],
            'payment' => 'required',
            'hoo' => 'required',
            'cuisines' => 'required',
            'dress_code' => 'required',
            'price_lower' => ['required', 'numeric'],
            'price_higher' => ['required', 'numeric'],
        
            'website' => ['nullable', 'URL', Rule::unique('restaurants', 'website')],
            'phone' => ['nullable', 'numeric', 'min:10', Rule::unique('restaurants', 'phone')],
            'email' => ['nullable', 'email', Rule::unique('restaurants', 'email')],
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $formFields['owner_id'] = auth('owner')->id();
        
        $restaurant = Restaurant::create($formFields);

        return redirect('/restaurants/' .$restaurant->id)->with('message', 'Restaurant has been created');
    }
}
