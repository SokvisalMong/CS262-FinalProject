@extends('layouts.user.master')

@section('title')
{{'Edit'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6 pb-8">
    <div class="p-10 max-w-lg mx-auto mt-10">
        <h1 class="text-center text-4xl pb-8">Update Information</h1>
        <form method="POST" action="/update">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="inline-block test-lg mb-2"> Username </label>
                    <input type="name" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{$user->name}}"/>
                
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone" class="inline-block test-lg mb-2"> Phone Number </label>
                    <input type="tel" class="border border-gray-200 rounded p-2 w-full" name="phone" value="{{$user->phone}}"/>
                
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="firstname" class="inline-block test-lg mb-2"> First Name </label>
                    <input type="name" class="border border-gray-200 rounded p-2 w-full" name="firstname" value="{{$user->firstname}}"/>
                
                    @error('firstname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="lastname" class="inline-block test-lg mb-2"> Last Name </label>
                    <input type="name" class="border border-gray-200 rounded p-2 w-full" name="lastname" value="{{$user->lastname}}"/>
                
                    @error('lastname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <a href="/" type="button" class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Cancel</a>
                    <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Update</button>
                </div>
        </form>
    </div>
</div>
@stop