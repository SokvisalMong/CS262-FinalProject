@extends('layouts.user.master')

@section('title')
{{'User Bookings'}}
@endsection

@section('content')
<div>
    <table>
        <tbody>
            @unless($bookings->isEmpty())
            @foreach($bookings as $booking)
            <tr>
                <td>{{Restaurant::find($booking->restaurant_id)->name}}</td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->time}}</td>
                <td>{{$booking->size}}</td>
                <td>{{$booking->status}}</td>
                <td>
                    <form method="POST" action="/bookings/cancel/{{$booking->id}}">
                    @csrf
                    @method('PUT')
                        <button>
                            Cancel
                        </button>
                    </form>
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
@stop