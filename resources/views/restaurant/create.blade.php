@extends('layouts.owner.master')

@section('title')
{{'Register'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="p-10 max-w-lg mx-auto mt-10">
        <h1 class="text-center text-4xl pb-8">Create Restaurant</h1>
        <form method="POST" action="/restaurants" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"/>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <p class="inline-block text-lg mb-2">Payment</p><br>
                {{-- <label for="payment" class="inline-block text-lg mb-2"> Payment </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="payment" /> --}}
                <input type="checkbox" name="payment" value="Cash" >
                <label for="payment" >Cash</label>

                <input type="checkbox" name="payment" value="Visa" >
                <label for="payment" >Visa</label>

                <input type="checkbox" name="payment" value="Mastercard" >
                <label for="payment" >Mastercard</label>

                <input type="checkbox" name="payment" value="ABA" >
                <label for="payment" >ABA</label>

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
                <p class="inline-block text-lg mb-2">Cuisines</p><br>
                {{-- <label for="cuisines" class="inline-block text-lg mb-2"> Cuisines</label>
                <input type="text" name="cuisines" value="{{$restaurant->cuisines}}" class="border border-gray-200 rounded p-2 w-full"> --}}
                <input type="checkbox" name="cuisines" value="Khmer" >
                <label for="cuisines" >Khmer</label>

                <input type="checkbox" name="cuisines" value="Western" >
                <label for="cuisines" >Western</label>

                <input type="checkbox" name="cuisines" value="Chinese" >
                <label for="cuisines" >Chinese</label>

                <input type="checkbox" name="cuisines" value="Vietnamese" >
                <label for="cuisines" >Vietnamese</label>

                <input type="checkbox" name="cuisines" value="International" >
                <label for="cuisines" >International</label>
                @error('cuisines')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                {{-- <label for="dress_code" class="inline-block text-lg mb-2"> Dress Code</label>
                <input type="text" name="dress_code" value="{{$restaurant->dress_code}}" class="border border-gray-200 rounded p-2 w-full"> --}}
                <input type="checkbox" name="dress_code" value="Casual" >
                <label for="dress_code" >Casual</label>

                <input type="checkbox" name="dress_code" value="Business Casual" >
                <label for="dress_code" >Business Casual</label>

                <input type="checkbox" name="dress_code" value="Casual Elegant" >
                <label for="dress_code" >Casual Elegant</label>

                <input type="checkbox" name="dress_code" value="Formal" >
                <label for="dress_code" >Formall</label>

                <input type="checkbox" name="dress_code" value="Jacket" >
                <label for="dress_code" >Jacket</label>
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
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="picture"/>

                @error('picture')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2"> Description </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="description"/>

                @error('description')
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