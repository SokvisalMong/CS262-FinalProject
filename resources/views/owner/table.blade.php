@extends('layouts.admin.master')

@section('title')
{{'Owner Table'}}
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
            @foreach($v_owner as $owner)
            <tr>
                <td>{{$owner->id}}</td>
                <td>{{$owner->name}}</td>
                <td>{{$owner->email}}</td>
                <td>{{$owner->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop