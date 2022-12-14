@extends('layouts.user.master')

@section('title')
{{'Log In'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6 m-auto">
    <div class="px-12 py-4 max-w-lg mx-auto rounded-3xl">
        <h1 class="text-center text-4xl pb-8">Login</h1>
        <form method="POST" action="/authenticate">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"> Email </label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>
                
                @error('email')
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
                <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Login</button>
            </div>
            
            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-blue-700">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
</div>
@stop