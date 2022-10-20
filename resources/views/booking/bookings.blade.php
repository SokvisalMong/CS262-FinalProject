@extends('layouts.user.master')

@section('title')
{{'User Bookings'}}
@endsection

@section('content')
<div class="mx-auto text-black w-full">
    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <div>
            @unless($bookings->isEmpty())
            <table>
                <thead>
                    <tr>
                        <td>Restaurant Name</td>
                        <td>Booking Date</td>
                        <td>Booking Time</td>
                        <td>Party Size</td>
                        <td>Status</td>
                        <td>Cancel</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{$booking->restaurant()->first()->name}}</td>
                        <td>{{$booking->date}}</td>
                        <td>{{$booking->time}}</td>
                        <td>{{$booking->size}}</td>
                        <td>{{$booking->status}}</td>
                        <td>
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
                    @else
                    <tr>
                        <td>
                            <p class="text-black text-2xl">No Bookings Found.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endunless
        </div>
    </div> 
</div>
@stop