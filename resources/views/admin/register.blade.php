@extends('layouts.admin.master')

@section('title')
{{'Register'}}
@endsection

@section('content')
<div class="mx-auto pt-32">
    <form method="POST" action="/admins">
        <h1 class="text-center font-bold text-3xl pb-4">Add another admin</h1>
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block test-lg mb-2"> Name </label>
            <input type="name" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
        
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block test-lg mb-2"> Email </label>
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
            <label for="password2" class="inline-block text-lg mb-2"> Confirm Password </label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value=""/>
      
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Create</button>
        </div>
    </form>
</div>
@stop