@extends('layouts.admin.master')

@section('title')
{{'Admin Table'}}
@endsection

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($v_admin as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop