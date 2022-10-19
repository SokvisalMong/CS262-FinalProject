@extends('layouts.admin.master')

@section('content')
<div class="mx-20 mt-14">
    <div class="w-full max-w-xs">
        <form method="post" action="/dashboard/addadmin" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" >
                    Username
                </label>
                <input class="shadow border border-gray-200 rounded p-2 w-full" type="text" id="username" name="name"> 
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" >
                    Email
                </label>
                <input class="shadow border border-gray-200 rounded p-2 w-full" type="email" id="email" name="email"> 
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" >
                    Password
                </label>
                <input class="shadow border border-gray-200 rounded p-2 w-full" type="password" id="password" name="password"> 
            </div>
            <div class="md:flex md:items-center">
                <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@stop