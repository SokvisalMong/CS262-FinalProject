@extends('layouts.user.master')

@section('title')
{{'Register'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="p-10 max-w-lg mx-auto mt-10">
        <h1 class="text-center text-4xl pb-8">Sign Up</h1>
        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <input type="name" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"> Email </label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="mobile" class="inline-block text-lg mb-2"> Phone Number </label>
                <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone" value="{{old('phone')}}"/>

                @error('phone')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2"> Password </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}"/>

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2"> Confirm Password </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value=""/>

                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Sign Up</button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-blue-700">Login</a>
                </p>
            </div>
        </form>
    </div>
</div>
@stop