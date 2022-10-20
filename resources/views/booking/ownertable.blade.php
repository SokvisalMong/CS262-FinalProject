@extends('layouts.owner.master')

@section('title')
{{'Restaurant Bookings'}}
@endsection

@section('content')
<div class="mx-20 mt-14 text-white">
    <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <table>
            <thead>
                <tr>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Size</td>
                    <td>Status</td>
                    <td>Cancel</td>
                    <td>Complete</td>
                </tr>
            </thead>
            <tbody>
                @unless($bookings->isEmpty())
                @foreach($bookings as $booking)
                <tr>
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
                        @endif
                    </td>
                    <td>
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
                <tr>
                    <td>
                        <p>No Bookings Found.</p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>
    </div>
</div> 
@stop