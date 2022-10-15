@extends('layouts.master')

@section('content')

<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Payment</th>
                <th>HOO</th>
                <th>Cuisine</th>
                <th>Dress</th>
                <th>Site</th>
                <th>Num</th>
                <th>Email</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>dummy</td>
                <td>Cash</td>
                <td>12-12</td>
                <td>Khmer</td>
                <td>Casual</td>
                <td>www.example.com</td>
                <td>012 345 678</td>
                <td>dummy@mail.com</td>
                <td>100 - 200</td>
            </tr>
            @foreach ($v_restaurants as $item)
                <td>{{$item->restaurant_id}}</td>
                <td>{{$item->restaurant_name}}</td>
                <td>{{$item->payment_options}}</td>
                <td>{{$item->hours_of_operation}}</td>
                <td>{{$item->cuisines}}</td>
                <td>{{$item->dress_code}}</td>
                <td>{{$item->restaurant_website}}</td>
                <td>{{$item->restaurant_mobile}}</td>
                <td>{{$item->restaurant_email}}</td>
                <td>{{$item->price_range_lower}} - {{$item->price_range_higher}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop