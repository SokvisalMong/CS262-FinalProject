@extends('layouts.master')

@section('content')

<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Size</th>
                <th>Status</th>
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
                    <td>{{$item->booking_id}}</td>
                    <td>{{$item->booking_date}}</td>
                    <td>{{$item->booking_time}}</td>
                    <td>{{$item->party_size}}</td>
                    <td>{{$item->booking_status}}</td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@stop