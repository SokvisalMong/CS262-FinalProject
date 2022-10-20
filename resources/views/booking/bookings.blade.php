@extends('layouts.user.master')

@section('title')
{{'User Bookings'}}
@endsection

@section('content')
<div class="mx-auto text-black w-full">
@unless($bookings->isEmpty())
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-sm text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
        <tr>
            <td scope="col" class="py-7 px-14">Restaurant Name</td>
            <td scope="col" class="py-7 px-14">Booking Date</td>
            <td scope="col" class="py-7 px-14">Booking Time</td>
            <td scope="col" class="py-7 px-14">Party Size</td>
            <td scope="col" class="py-7 px-14">Status</td>
            <td scope="col" class="py-7 px-14">Cancel</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bookings as $booking)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$booking->restaurant()->first()->name}}</td>
            <td class="py-7 px-14">{{$booking->date}}</td>
            <td class="py-7 px-14">{{$booking->time}}</td>
            <td class="py-7 px-14">{{$booking->size}}</td>
            <td class="py-7 px-14">{{$booking->status}}</td>
            <td class="py-7 px-14">
                @if($booking->status == 'Active')
                <form method="POST" action="/bookings/cancel/{{$booking->id}}">
                @csrf
                @method('PUT')
                    <button>
                        Cancel
                    </button>
                </form>
                @else
                
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="bg-white text-center m-auto py-64">
    <p class="text-black text-2xl">No Bookings Found.</p>
</div>
@endunless
</div>
@stop