@extends('layouts.user.master')

@section('title')
{{$restaurant->name}}
@endsection

@section('content')
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Owner ID</th>
                <th>Name</th>
                <th>Payment</th>
                <th>HOO</th>
                <th>Cuisines</th>
                <th>Dress Code</th>
                <th>Price</th>
                <th>Website</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$restaurant->id}}</td>
                <td>{{$restaurant->owner_id}}</td>
                <td>{{$restaurant->name}}</td>
                <td>{{$restaurant->payment}}</td>
                <td>{{$restaurant->hoo}}</td>
                <td>{{$restaurant->cuisines}}</td>
                <td>{{$restaurant->dress_code}}</td>
                <td>{{$restaurant->price_higher}} - {{$restaurant->price_lower}}</td>
                <td>{{$restaurant->website}}</td>
                <td>{{$restaurant->phone}}</td>
                <td>{{$restaurant->email}}</td>
                <td>{{$restaurant->description}}</td>
            </tr>
        </tbody>
    </table>
</div>
@stop