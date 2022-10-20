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

    public function create() {
        return view('restaurant.create');
    }

    public function show(Restaurant $restaurant) {
        return view('restaurant.show', ['restaurant' => $restaurant]);
    }

    public function book(Restaurant $restaurant) {
        return view('booking.book', ['restaurant' => $restaurant]);
    }
    public function showAll() {
        return view('restaurant.restaurants', ['restaurants' => Restaurant::latest()->filter(request(['cuisines', 'dress_code', 'search']))->get()]);
    }

    public function store(Request $request) {
        $request['payment'] = [
            $request->cash,
            $request->visa,
            $request->mastercard,
            $request->aba
        ];

        $request['payment'] = array_filter($request['payment']);

        $request->payment = implode(',', $request['payment']);

        $request['cuisines'] = [
            $request->khmer,
            $request->western,
            $request->chinese,
            $request->vietnamese,
            $request->int
        ];

        $request['cuisines'] = array_filter($request['cuisines']);

        $request->cuisines = implode(',', $request['cuisines']);

        $request['dress_code'] = [
            $request->casual, 
            $request->b_casual, 
            $request->e_casual,
            $request->formal,
            $request->jacket
        ];

        $request['dress_code'] = array_filter($request['dress_code']);

        $request->dress_code = implode(',', $request['dress_code']);

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'payment' => 'required',
            'hoo' => 'required',
            'cuisines' => 'required',
            'dress_code' => 'required',
            'price_lower' => ['required', 'numeric'],
            'price_higher' => ['required', 'numeric'],
            
            'description' => 'nullable',
            'website' => ['nullable'],
            'phone' => ['nullable', 'numeric', 'min:10'],
            'email' => ['nullable', 'email'],
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $formFields['owner_id'] = auth('owner')->id();

        
        $formFields['payment'] = $request->payment;
        $formFields['cuisines'] = $request->cuisines;
        $formFields['dress_code'] = $request->dress_code;

        Restaurant::create($formFields);

        return redirect('/')->with('message', 'Restaurant has been created');
    }

    public function update(Request $request, Restaurant $restaurant) {
        if($restaurant->owner_id != auth('owner')->id()) {
            abort(403, 'Unauthorized Action.');
        }

        $request['payment'] = [
            $request->cash,
            $request->visa,
            $request->mastercard,
            $request->aba
        ];

        $request['payment'] = array_filter($request['payment']);

        $request->payment = implode(',', $request['payment']);

        $request['cuisines'] = [
            $request->khmer,
            $request->western,
            $request->chinese,
            $request->vietnamese,
            $request->int
        ];

        $request['cuisines'] = array_filter($request['cuisines']);

        $request->cuisines = implode(',', $request['cuisines']);

        $request['dress_code'] = [
            $request->casual, 
            $request->b_casual, 
            $request->e_casual,
            $request->formal,
            $request->jacket
        ];

        $request['dress_code'] = array_filter($request['dress_code']);

        $request->dress_code = implode(',', $request['dress_code']);

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'payment' => 'required',
            'hoo' => 'required',
            'cuisines' => 'required',
            'dress_code' => 'required',
            'price_lower' => ['required', 'numeric'],
            'price_higher' => ['required', 'numeric'],
            
            'description' => 'nullable',
            'website' => ['nullable'],
            'phone' => ['nullable', 'numeric', 'min:10'],
            'email' => ['nullable', 'email'],
        ]);

        $formFields['payment'] = $request->payment;
        $formFields['cuisines'] = $request->cuisines;
        $formFields['dress_code'] = $request->dress_code;

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $restaurant->update($formFields);

        return back()->with('message', 'Restaurant has been updated');
    }

    public function showtable() {
        $restaurant_db = Restaurant::all();

        return view('restaurant.table', ["v_restaurant" => $restaurant_db]);
    }

    public function destroy(Restaurant $restaurant) {
        $restaurant->delete();

        return back()->with('message', 'Restaurant has been deleted.');
    }
}
