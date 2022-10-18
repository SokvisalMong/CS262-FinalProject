@extends('layouts.master')

@section('content')

<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2x1 font-bold uppercase mb-1">Register</h2>
        <p class="mb-4">Create an admin account</p>
    </header>

    <form method="POST" action="/addadmin">
        @csrf
        <div class="mb-6">
            <label for="username" class="inline-block test-lg mb-2"> Username </label>
            <input type="name" class="border border-gray-200 rounded p-2 w-full" name="admin_username" value="{{old('admin_username')}}"/>
        
            @error('admin_username')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="email" class="inline-block test-lg mb-2"> Email </label>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="admin_email" value="{{old('admin_email')}}"/>
        
            @error('admin_email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2"> Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="admin_password"value="{{old('admin_password')}}"/>
      
            @error('admin_password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password2" class="inline-block text-lg mb-2"> Confirm Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="admin_password_confirmation"value=""/>
      
            @error('admin_password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Sign Up</button>
        </div>
        
        <div class="mt-8">
            <p>
                Already have an account?
                <a href="/signin" class="text-laravel">Login</a>
            </p>
        </div>
    </form>
</x-card>

@stop