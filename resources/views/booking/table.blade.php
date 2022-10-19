@extends('layouts.admin.master')

@section('title')
{{'Booking Table'}}
@endsection

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Rest_ID</th>
                <th>User_ID</th>
                <th>Status</th>
                <th>Date</th>
                <th>Time</th>
                <th>Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach($v_booking as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->restaurant_id}}</td>
                <td>{{$booking->user_id}}</td>
                <td>{{$booking->status}}</td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->time}}</td>
                <td>{{$booking->size}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop