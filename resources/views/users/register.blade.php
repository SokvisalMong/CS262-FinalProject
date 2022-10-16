@extends('layouts.master')

@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2x1 font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an account to starting booking</p>
    </header>

    <form method="POST" action="/post/createuser">
        @csrf
        <div class="mb-6">
            <label for="email" class="inline-block test-lg mb-2"> Email </label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="user_email" value="{{old('user_email')}}"/>
        
            @error('user_email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="mobile" class="inline-block test-lg mb-2"> Phone Number </label>
            <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="user_mobile" value="{{old('user_mobile')}}"/>
        
            @error('user_mobile')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2"> Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="user_password"value="{{old('user_password')}}"/>
      
            @error('user_password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password2" class="inline-block text-lg mb-2"> Confirm Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="user_password_confirmation"value=""/>
      
            @error('user_password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Sign Up</button>
        </div>
        
        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/SignIn" class="text-laravel">Login</a>
            </p>
        </div>
    </form>
</x-card>

@stop