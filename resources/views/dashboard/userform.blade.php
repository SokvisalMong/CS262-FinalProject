@extends('dashboard.dashmaster')

@section('content')
<div class="w-full max-ws">
    <form method="post" action="/AddUser" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Email
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="email" name="user_email"> 
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                Password
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="password" id="password" name="user_password"> 
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" >
                First Name
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="firstname" name="user_firstname"> 
        </div>
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Last Name
        </label>
        <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="lastname" name="user_lastname"> 
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
            Mobile
        </label>
        <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="mobile" name="user_mobile"> 
    </div>
        <div class="md:flex md:items-center">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                Submit
            </button>
        </div>
</div>
@stop
