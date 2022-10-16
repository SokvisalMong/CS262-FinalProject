@extends('layouts.master')

@section('content')
<div class="w-full max-ws">
    <form method="POST" action="/app/Http/Controllers/AdminController/AddAdmin" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow border border-gray-200 rounded p-2 w-full">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Email
            </label>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Password
            </label>
        </div>
        <div class="md:flex md:items-center">
            <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">
                Submit 
            </button>
        </div>
    </form>
</div>
@stop