@extends('layouts.owner.master')

@section('title')
{{'Register'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded px-20 my-auto mx-auto">
    <div class="max-w-lg mx-auto rounded-3x1 pt-6">
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
                <input type="checkbox" name="cash" value="Cash" >
                <label for="cash" >Cash</label>

                <input type="checkbox" name="visa" value="Visa" >
                <label for="visa" >Visa</label>

                <input type="checkbox" name="mastercard" value="Mastercard" >
                <label for="mastercard" >Mastercard</label>

                <input type="checkbox" name="aba" value="ABA" >
                <label for="aba" >ABA</label>

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
                <input type="checkbox" name="khmer" value="Khmer" >
                <label for="khmer" >Khmer</label>

                <input type="checkbox" name="western" value="Western" >
                <label for="western" >Western</label>

                <input type="checkbox" name="chinese" value="Chinese" >
                <label for="chinese" >Chinese</label>

                <input type="checkbox" name="vietnamese" value="Vietnamese" >
                <label for="vietnamese" >Vietnamese</label>

                <input type="checkbox" name="int" value="International" >
                <label for="int" >International</label>
                @error('cuisines')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <p class="inline-block text-lg mb-2">Dress Code</p><br>
                {{-- <label for="dress_code" class="inline-block text-lg mb-2"> Dress Code</label>
                <input type="text" name="dress_code" value="{{$restaurant->dress_code}}" class="border border-gray-200 rounded p-2 w-full"> --}}
                <input type="checkbox" name="casual" value="Casual">
                <label for="casual" >Casual</label>

                <input type="checkbox" name="b_casual" value="Business Casual" >
                <label for="b_casual" >Business Casual</label>

                <input type="checkbox" name="e_casual" value="Casual Elegant" >
                <label for="e_casual" >Casual Elegant</label>

                <input type="checkbox" name="formal" value="Formal" >
                <label for="formal" >Formal</label>

                <input type="checkbox" name="jacket" value="Jacket" >
                <label for="jacket" >Jacket</label>
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