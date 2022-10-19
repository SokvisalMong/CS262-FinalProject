@extends('layouts.user.master')

@section('title')
{{'Restaurants'}}
@endsection

@section('content')
<div>
    @foreach($restaurants as $restaurant)
    <div>
        <h1>{{$restaurant->name}}</h1>
    </div>
    @endforeach
</div>
@stop