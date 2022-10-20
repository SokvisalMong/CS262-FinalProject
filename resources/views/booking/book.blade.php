@extends('layouts.user.master')

@section('content')
    
<div>
    <form method="POST" action="/bookings/create/{{$restaurant->id}}">
        @csrf
        <div class="mb-6">
            <label for="time" class="inline-block"> Time </label>
            <input type="time" name="time" class="border border-gray-200 rounded p-2 w-full"/>

            @error('time')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="date" class="inline-block"> Date </label>
            <input type="date" name="date" class="border border-gray-200 rounded p-2 w-full"/>

            @error('date')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="size" class="inline-block"> Party Size </label>
            <input type="number" max="100" min="1" name="size" class="border border-gray-200 rounded p-2 w-full"/>

            @error('size')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black"> Submit </button>
        </div>
    </form>    
</div>
@stop