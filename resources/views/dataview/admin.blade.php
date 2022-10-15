@extends('layouts.master')

@section('content')

<div>
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </thead>
        <tbody>
            @foreach ($v_admins as $item)
                <td scope="row">{{$item->admin_id}}</td>
                <td scope="row">{{$item->admin_username}}</td>
                <td scope="row">{{$item->admin_email}}</td>
                <td scope="row">{{$item->admin_password}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop