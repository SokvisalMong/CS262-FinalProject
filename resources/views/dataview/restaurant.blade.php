@extends('layouts.master')

@section('content')

<div>
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Payment</th>
            <th scope="col">HOO</th>
            <th scope="col">Cuisine</th>
            <th scope="col">Dress</th>
            <th scope="col">Site</th>
            <th scope="col">Num</th>
            <th scope="col">Email</th>
            <th scope="col">Price</th>
        </thead>
        <tbody>
            @foreach ($v_restaurants as $item)
                <td scope="row">{{$item->restaurant_id}}</td>
                <td scope="row">{{$item->restaurant_name}}</td>
                <td scope="row">{{$item->payment_options}}</td>
                <td scope="row">{{$item->hours_of_operation}}</td>
                <td scope="row">{{$item->cuisines}}</td>
                <td scope="row">{{$item->dress_code}}</td>
                <td scope="row">{{$item->restaurant_website}}</td>
                <td scope="row">{{$item->restaurant_mobile}}</td>
                <td scope="row">{{$item->restaurant_email}}</td>
                <td scope="row">{{$item->price_range_lower}} - {{$item->price_range_higher}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop