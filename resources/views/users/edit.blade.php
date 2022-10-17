@extends('layouts.master')

@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2x1 font-bold uppercase mb-1">Edit Account</h2>
        <p class="mb-4">Edit: {{auth()->user()->user_email}}</p>
    </header>

    <form method="POST" action="/update">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="mobile" class="inline-block test-lg mb-2"> Phone Number </label>
            <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="user_mobile" value="{{auth()->user()->user_mobile}}"/>
        
            @error('user_mobile')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="firstname" class="inline-block test-lg mb-2"> First Name </label>
            <input type="name" class="border border-gray-200 rounded p-2 w-full" name="user_firstname" value="{{auth()->user()->user_firstname}}"/>
        
            @error('user_firstname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="lastname" class="inline-block test-lg mb-2"> Last Name </label>
            <input type="name" class="border border-gray-200 rounded p-2 w-full" name="user_lastname" value="{{auth()->user()->user_lastname}}"/>
        
            @error('user_lastname')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2"> Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="user_password"value=""/>
      
            @error('user_password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password2" class="inline-block text-lg mb-2"> Retype Old Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="user_password_confirmation"value=""/>
      
            @error('user_password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <a href="/" type="button" class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Cancel</a>
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Update</button>
        </div>
    </form>
</x-card>

@stop