@extends('layouts.master')

@section('content')

<div>
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
        </thead>
        <tbody>
            @foreach ($v_users as $item)
                <td scope="row">{{$item->user_id}}</td>
                <td scope="row">{{$item->user_email}}</td>
                <td scope="row">{{$item->user_firstname}}</td>
                <td scope="row">{{$item->user_lastname}}</td>
                <td scope="row">{{$item->user_mobile}}</td>
                <td scope="row">{{$item->user_password}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop