@extends('layouts.master')

@section('content')

<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First</th>
                <th>Last</th>
                <th>Mobile</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>dummy@mail.com</td>
                <td>Dummy</td>
                <td>Dum</td>
                <td>012 345 678</td>
                <td>dummy123</td>
            </tr>
            @foreach ($v_users as $item)
                <tr>
                    <td>{{$item->user_id}}</td>
                    <td>{{$item->user_email}}</td>
                    <td>{{$item->user_firstname}}</td>
                    <td>{{$item->user_lastname}}</td>
                    <td>{{$item->user_mobile}}</td>
                    <td>{{$item->user_password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop