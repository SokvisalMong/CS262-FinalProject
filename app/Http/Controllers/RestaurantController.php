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

    public function show(Restaurant $restaurant) {
        return view('restaurant.show', ['restaurant' => $restaurant]);
    }

    public function book(Restaurant $restaurant) {
        return view('booking.book', ['restaurant' => $restaurant]);
    }
    public function showAll() {
        return view('restaurant.restaurants', ['restaurants' => Restaurant::all()]);
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

    public function update(Request $request, Restaurant $restaurant) {
        if($restaurant->owner_id != auth('owner')->id()) {
            abort(403, 'Unauthorized Action.');
        }

        $formFields = $request->validate([
            'name' => ['required', 'min:3', Rule::unique('restaurants', 'name')],
            'payment' => ['required'],
            'hoo' => 'required',
            'cuisines' => 'required',
            'dress_code' => 'required',
            'price_lower' => ['required', 'numeric'],
            'price_higher' => ['required', 'numeric'],

            'website' => ['nullable', 'URL', Rule::unique('restaurants')],
            'phone' => ['nullable', 'numeric', 'min:10', Rule::unique('restaurants', 'phone')],
            'email' => ['nullable', 'email', Rule::unique('restaurants', 'email')],
        ]);

        $restaurant->update($formFields);

        return back()->with('message', 'Restaurant has been updated');
    }

    public function showtable() {
        $restaurant_db = Restaurant::all();

        return view('admin.restauranttable', ["v_restaurant" => $restaurant_db]);
    }
}
