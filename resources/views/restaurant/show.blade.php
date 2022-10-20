@extends('layouts.user.master')

@section('title')
{{$restaurant->name}}
@endsection

@section('content')
<div class="w-full my-auto flex justify-center">
    <div class="bg-cover max-w-7xl mx-auto">
        @if($restaurant->picture == NULL)
        <img src="{{asset('/pictures/no-image.png')}}" alt="no-picture">
        @else
        <img src="{{asset('storage/'. $restaurant->picture)}}" alt="restaurant-picture">
        @endif
    </div>
</div>

<div class="container mx-auto">
    <div class="border-b border-b-gray-600">
        <h1 class="group flex whitespace-pre-wrap -ml 04 pl-4" id="restaurant_name">
            <span class="my-7 text-gray-700 text-3xl font-bold px-7 tracking-wide"> {{$restaurant->name}} </span>
        </h1>
    </div>

    <div class="flex">
        <div class="w-4/6 my-8 float-left">
            <div class="mb-4 gap-5">
                <div class="flex pl-24 space-x-3 min-w-min">
                    <span class=" text-gray-700 text-base font-semibold flex rounded-md pr-3 border-2 border-gray-300 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                            <p class="ml-2">
                                {{$restaurant->price_higher}}$ - {{$restaurant->price_lower}}$
                            </p>
                    </span>

                    <span class=" text-gray-700 text-base font-semibold flex rounded-md pr-2 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                            <p class="ml-2">
                                {{$restaurant->cuisines}} 
                            </p>
                    </span>
                </div>
            </div>
                
            @if($restaurant->description != NULL)
            <div class="overflow-hidden text-gray-700 text-xl mt-7 mb-2 px-6 pt-4 pb-2">
                {{$restaurant->description}}
            </div>
            @endif
            <div class="mx-12 mt-6 pt-10 pb-1 text-center">
                <a href="/bookings/{{$restaurant->id}}" type="button" class="rounded-lg bg-sky-500 hover:bg-sky-700 focus:ring-sky-700 text-white text-lg text-center justify font-semibold px-5 py-2 my-2">Book a time</a>
            </div>
        </div>
    
        <div class="w-2/6 float-right px-3 py-7">
            <h2 class="text-gray-700 text-xl font-semibold justify-start mx-5 mb-5 "> Additional Information </h2>
            <div class="flex flex-col mx-3 mt-7 justify-start">

                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                  
                    <span class="text-gray-700 text-base font-semibold ml-2">Hours of Operation</span>
                </div>
                <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->hoo}}</p>

                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                    <span class="text-gray-700 text-base font-semibold ml-2">Cuisine</span>
                </div>
                    <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->cuisines}}</p>

                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <span class="text-gray-700 text-base font-semibold ml-2">Dress Code</span>
                </div>
                    <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->dress_code}}</p>
                
                    
                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                    </svg>     
                    <span class="text-gray-700 text-base font-semibold ml-2">Payment Options</span>
                </div>
                    <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->payment}}</p>
                @if($restaurant->website != NULL)
                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <span class="text-gray-700 text-base font-semibold ml-2">Website</span>
                </div>
                <a class="text-gray-700 text-sm font-normal ml-8" href="https://{{$restaurant->website}}">{{$restaurant->website}}</a>
                @endif
                @if($restaurant->phone != NULL)
                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>  
                    <span class="text-gray-700 text-base font-semibold ml-2">Phone Number</span>
                </div>
                @endif
                    <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->phone}}</p>
                @if($restaurant->email != NULL)
                <div class="lg:flex w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                    </svg>
                    <span class="text-gray-700 text-base font-semibold ml-2">Email</span>
                </div>
                    <p class="text-gray-700 text-sm font-normal ml-8">{{$restaurant->email}}</p>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection