@extends('layouts.master')

@section('title')
{{'Restaurant List'}}
@endsection

@section('content')
<div class="">
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <div class="rounded overflow-hidden shadow-lg">
            <div class="w-full">
                <img src="{{ asset('images/geobasket.jpg') }}" alt="placeholder-img">
            </div>
                <div class=" border-t border-gray-400  lg:border-t lg:border-gray-400 bg-white p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-1 px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-lg font-semibold text-gray-400 mr-2 mb-2">
                            Restaurant Name
                        </span>
                        <div class="text-gray-700 font-semibold text-xl mb-2 px-6 pt-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.   
                        </div>
                        <button type="button" class="rounded-lg bg-sky-500 hover:bg-sky-700 text-white text-sm text-center font-semibold px-5 py-2 my-4"> More info</button>
                    </div> 
                </div> 
        </div>
    </div>
</div>

@endsection