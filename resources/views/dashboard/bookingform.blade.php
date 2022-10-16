@extends('dashboard.dashmaster')

@section('content')
<div class="w-full max-ws">
    <form method="post" action="/" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Username
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="status" name="booking_status"> 
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Email
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="date" id="date" name="booking_date"> 
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Password
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="time" id="time" name="booking_time"> 
        </div>
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Password
        </label>
        <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="size" name="party_size"> 
    </div>
        <div class="md:flex md:items-center">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                Submit
            </button>
        </div>
</div>
@stop
