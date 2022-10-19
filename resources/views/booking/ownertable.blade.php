@extends('layouts.user.master')

@section('title')
{{'Restaurant Bookings'}}
@endsection

@section('content')
<div>
    <table>
        <tbody>
            @unless($bookings->is_null())
            @foreach($bookings as $booking)
            <tr>
                <td></td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->time}}</td>
                <td>{{$booking->size}}</td>
                <td>{{$booking->status}}</td>
                <td>
                    <form method="POST" action="">
                    @csrf
                    @method('PUT')
                        <button>
                            Cancel
                        </button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="">
                    @csrf
                    @method('PUT')
                        <button>
                            Complete
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