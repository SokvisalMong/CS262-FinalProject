@extends('layouts.master')

@section('content')

<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Size</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>1/1/2000</td>
                <td>00:00</td>
                <td>1</td>
                <td>Canceled</td>
            </tr>
            @foreach ($v_bookings as $item)
                <tr>
                    <td scope="row">{{$item->booking_id}}</td>
                    <td scope="row">{{$item->booking_date}}</td>
                    <td scope="row">{{$item->booking_time}}</td>
                    <td scope="row">{{$item->party_size}}</td>
                    <td scope="row">{{$item->booking_status}}</td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@stop