@extends('dashboard.dashmaster')

@section('content')
<div class="w-full max-ws">
    <form method="post" action="/dashboard/addrestaurant" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Name
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="name" name="restaurant_name"> 
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Payment Options
            </label>
            {{-- <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="payment" name="payment_options">  --}}
            <input type="radio" id="cash" name="payment_options" value="Cash">
            <label for="cash">Cash</label>
    
            <input type="radio" id="visa" name="payment_options" value="Visa">
            <label for="visa">Visa</label>
    
            <input type="radio" id="mastercard" name="payment_options" value="Mastercard">
            <label for="mastercard">Mastercard</label>
    
            <input type="radio" id="aba" name="payment_options" value="ABA">
            <label for="aba">ABA</label>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Hours Of Operation
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="hours" name="hours_of_operation"> 
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Cuisine
            </label>
            {{-- <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="cuisines" name="cuisines">  --}}
            <input type="radio" id="khmer" name="cuisines" value="Khmer">
            <label for="khmer">Khmer</label>

            <input type="radio" id="western" name="cuisines" value="Western">
            <label for="western">Western</label>

            <input type="radio" id="chinese" name="cuisines" value="Chinese">
            <label for="chinese">Chinese</label>

            <input type="radio" id="vietnamese" name="cuisines" value="Vietnamese">
            <label for="vietnamese">Vietnamese</label>

            <input type="radio" id="international" name="cuisines" value="Internatonal">
            <label for="international">Internatonal</label>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Dress Code
            </label>
            {{-- <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="dress_code" name="dress_code">  --}}
            <input type="radio" id="casual" name="dress_code" value="Casual">
            <label for="casual">Casual</label>

            <input type="radio" id="business_casual" name="dress_code" value="Business Casual">
            <label for="business_casual">Business Casual</label>

            <input type="radio" id="casual_elegant" name="dress_code" value="Casual Elegant">
            <label for="casual_elegant">Casual Elegant</label>

            <input type="radio" id="formal" name="dress_code" value="Formal">
            <label for="Formal">Formal</label>

            <input type="radio" id="jacket" name="dress_code" value="Jacket">
            <label for="jacket">Jacket</label>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Website
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="website" name="restaurant_website"> 
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Mobile
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="mobile" name="restaurant_mobile"> 
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Email
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="email" id="email" name="restaurant_email"> 
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Price Range Lower
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="lowpricerange" name="price_range_lower"> 
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Price Range Higher
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="highpricerange" name="price_range_higher"> 
        </div>

        {{-- adding restaurant pictures into db --}}
        <div class="mb-6">
            <label for="restaurant_pic" class="inline-block text-lg mb-2">
              Company Logo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="restaurant_pic" />
        </div>

        <div class="md:flex md:items-center">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                Submit
            </button>
    </div>
</div>
@stop