@extends('layouts.master')

@section('title')
{{'Restaurant List'}}
@endsection

@section('content')
<div class="rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 p-10 flex justify-center">
    <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
            <img src="{{ asset('images/aria.jpg') }}" alt="placeholder-img">
        </div>
            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <a href="">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"></svg>
                            Restaurant Name
                        </p>
                        <div class="text-gray-900 font-bold text-xl mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</div>
                    </a>
                </div>
            </div>
    </div>

    
</div>


    
@endsection