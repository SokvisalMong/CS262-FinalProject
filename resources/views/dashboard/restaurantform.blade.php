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
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="payment" name="payment_options"> 
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Hours Of Operation
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="hours" name="hours_of_operation"> 
        </div>
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Cuisine
        </label>
        <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="cuisines" name="cuisines"> 
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Dress Code
        </label>
        <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="dress_code" name="dress_code"> 
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
        <div class="md:flex md:items-center">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                Submit
            </button>
        </div>
</div>
@stop