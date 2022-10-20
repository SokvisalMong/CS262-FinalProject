@extends('layouts.owner.master')

@section('title')
{{'Restaurant Bookings'}}
@endsection

@section('content')

<div class="mx-20 mt-14">
    <h1 class="text-center text-4xl pb-8 text-black"> Booking List</h1>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
            <tr>
                <td scope="col" class="py-7 px-14">
                    Name
                </td>
                <td scope="col" class="py-7 px-14">
                    Date
                </td>
                <td scope="col" class="py-7 px-14">
                    Time
                </td>
                <td scope="col" class="py-7 px-14">
                    Size
                </td>
                <td scope="col" class="py-7 px-14">
                    Status
                </td>
                <td scope="col" class="py-7 px-14">
                    Cancel
                </td>
                <td scope="col" class="py-7 px-14">
                    Complete
                </td>
            </tr>
        </thead>
        <tbody>
            @unless($bookings->isEmpty())
            @foreach($bookings as $booking)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$booking->user()->first()->name}}</td>
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
                    @endif
                </td>
                <td class="py-7 px-14">
                    @if($booking->status == 'Active')
                    <form method="POST" action="/bookings/complete/{{$booking->id}}">
                    @csrf
                    @method('PUT')
                        <button>
                            Complete
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
            @else
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-7 px-14">
                    <p>No Bookings Found.</p>
            </td>
        </tr>
        @endunless
        </tbody>
    </table>

</div> 
@stop