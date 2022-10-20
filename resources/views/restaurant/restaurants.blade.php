@extends('layouts.user.master')

@section('title')
{{'Restaurants'}}
@endsection

@section('content')
<div>
    @include('layouts.components.search')
    <h1 class="text-center font-bold text-4xl pt-2">Available Restaurants in Phnom Penh City</h1>
    <div class="flex">
        @include('layouts.components.filter')
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5"> 

            @foreach($restaurants as $restaurant)
                <div class="flex px-8 pt-4 ">
                    <div class="rounded overflow-hidden shadow-lg ">
                        {{-- THIS ONE --}}
                        <div class="">
                            @if($restaurant->picture == NULL)
                            <img src="{{asset('/pictures/no-image.png')}}" alt="no-picture" class="h-60 w-screen">
                            @else
                            <img src="{{'storage/'. $restaurant->picture}}" alt="placeholder-img" class="h-60 w-screen">
                            @endif
                        </div>

                        <div class=" border-t border-gray-400  lg:border-t lg:border-gray-400 bg-white p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-1 px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-lg font-semibold text-gray-400 mr-2 mb-2">
                                    {{$restaurant->name}}
                                </span>
                                <div class="text-gray-700 font-semibold text-xl mb-2 px-3 pt-4 pb-2">
                                    {{$restaurant->description}}   
                                </div>
                                <a href="/restaurants/{{$restaurant->id}}" type="button" class="rounded-lg bg-sky-500 hover:bg-sky-700 text-white text-sm text-center font-semibold px-3 py-2 my-4"> More info</a>
                            </div> 
                        </div> 
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
@stop
