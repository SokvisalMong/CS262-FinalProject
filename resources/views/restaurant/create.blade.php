@extends('layouts.user.master')

@section('title')
{{'Register'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="p-10 max-w-lg mx-auto mt-10">
        <h1 class="text-center text-4xl pb-8">Create Restaurant</h1>
        <form method="POST" action="/">
            @csrf
            <div class="mb-6">
                <label for="owner_id" class="inline-block text-lg mb-2"> Owner ID </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="owner_id" />

                @error('owner_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"/>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="payment" class="inline-block text-lg mb-2"> Payment </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="payment" />

                @error('payment')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="hoo" class="inline-block text-lg mb-2"> HOO </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="hoo" />

                @error('hoo')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="cuisines" class="inline-block text-lg mb-2"> Cuisines </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="cuisines"/>

                @error('cuisines')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="dress_code" class="inline-block text-lg mb-2"> Dress Code </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="dress_code"/>

                @error('dress_code')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price_lower" class="inline-block text-lg mb-2"> LowerPrice </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price_lower"/>

                @error('price_lower')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price_higher" class="inline-block text-lg mb-2"> HigherPrice </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price_higher"/>

                @error('price_higher')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2"> Website </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"/>

                @error('website')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="phone" class="inline-block text-lg mb-2"> Phone </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone"/>

                @error('phone')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"> email </label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"/>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="picture" class="inline-block text-lg mb-2"> Picture </label>
                <input type="file_input" class="border border-gray-200 rounded p-2 w-full" name="picture"/>

                @error('picture')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Create</button>
            </div>
        </form>
    </div>
</div>
@stop