@extends('layouts.master')

@section('content')

<div>
    <table class="table-auto">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>dummy</td>
                <td>dummy@mail.com</td>
                <td>dummy123</td>
            </tr>
            @foreach ($v_admins as $item)
                <tr>
                    <td>{{$item->admin_id}}</td>
                    <td>{{$item->admin_username}}</td>
                    <td>{{$item->admin_email}}</td>
                    <td>{{$item->admin_password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop