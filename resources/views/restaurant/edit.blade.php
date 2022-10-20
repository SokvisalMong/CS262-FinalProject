@extends('layouts.owner.master')

@section('title')
{{'Edit'}}
@endsection

@section('content')
<div class="bg-gray-50 border border-gray-200 rounded px-20">
    <div class="max-w-lg mx-auto mt-10">
        <h1 class="text-center text-4xl pb-8">Edit Restaurant</h1>
        <form method="POST" action="/restaurants/update/{{$restaurant->id}}" class="">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="inline-block text-lg mb-2">Restaurant Name</label>
                <input type="name" name="name" value="{{$restaurant->name}}" class="border border-gray-200 rounded p-2 w-full">
                @error('name')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div>
                <p class="inline-block text-lg mb-2">Payment</p><br>
                {{-- <label for="payment" class="inline-block text-lg mb-2"> Payment</label>
                <input type="text" name="payment" value="{{$restaurant->payment}}" class="border border-gray-200 rounded p-2 w-full"> --}}
                <input type="checkbox" name="payment" value="Cash" >
                <label for="payment" >Cash</label>

                <input type="checkbox" name="payment" value="Visa" >
                <label for="payment" >Visa</label>

                <input type="checkbox" name="payment" value="Mastercard" >
                <label for="payment" >Mastercard</label>

                <input type="checkbox" name="payment" value="ABA" >
                <label for="payment" >ABA</label>
                
                @error('payment')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="hoo" class="inline-block text-lg mb-2"> HOO</label>
                <input type="text" name="hoo" value="{{$restaurant->hoo}}" class="border border-gray-200 rounded p-2 w-full">
                @error('hoo')
                    <p>{{$message}}</p>
                @enderror
            </div>   
            
            <div>
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
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <p class="inline-block text-lg mb-2">Dress Code</p><br>
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
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="price_lower" class="inline-block text-lg mb-2"> Price Lower</label>
                <input type="text" name="price_lower" value="{{$restaurant->price_lower}}" class="border border-gray-200 rounded p-2 w-full">
                @error('price_lower')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="price_higher" class="inline-block text-lg mb-2">Price Higher </label>
                <input type="text" name="price_higher" value="{{$restaurant->price_higher}}" class="border border-gray-200 rounded p-2 w-full">
                @error('price_higher')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="website" class="inline-block text-lg mb-2"> Website</label>
                <input type="text" name="website" value="{{$restaurant->website}}" class="border border-gray-200 rounded p-2 w-full">
                @error('website')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="phone" class="inline-block text-lg mb-2"> Phone</label>
                <input type="text" name="phone" value="{{$restaurant->phone}}" class="border border-gray-200 rounded p-2 w-full">
                @error('phone')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="email" class="inline-block text-lg mb-2"> Email</label>
                <input type="email" name="email" value="{{$restaurant->email}}" class="border border-gray-200 rounded p-2 w-full">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="description" class="inline-block text-lg mb-2">Description </label>
                <input type="text" name="description" value="{{$restaurant->description}}" class="border border-gray-200 rounded p-2 w-full">
                @error('description')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div>
                <label for="picture" class="inline-block text-lg mb-2"> Picture</label>
                <input type="file" name="picture" value="{{$restaurant->picture}}" class="border border-gray-200 rounded p-2 w-full">
                @error('picture')
                    <p>{{$message}}</p>
                @enderror
            </div>  

            <div class="mb-6" class="inline-block text-lg mb-2">
                <button class="bg-gray-800 text-white rounded py-2 px-4 hover:bg-black">Update</button>
            </div>

        </form>
    </div>
</div>


@endsection


