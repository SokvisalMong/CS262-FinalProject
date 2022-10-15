@extends('layouts.master')

@section('content')

<div>
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Size</th>
            <th scope="col">Status</th>
        </thead>
        <tbody>
            @foreach ($v_bookings as $item)
                <td scope="row">{{$item->booking_id}}</td>
                <td scope="row">{{$item->booking_date}}</td>
                <td scope="row">{{$item->booking_time}}</td>
                <td scope="row">{{$item->party_size}}</td>
                <td scope="row">{{$item->booking_status}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop