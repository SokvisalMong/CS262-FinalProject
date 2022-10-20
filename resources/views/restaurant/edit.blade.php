@extends('layouts.owner.master')

@section('title')
{{'Edit'}}
@endsection

@section('content')
<form method="POST" action="/restaurants/update/{{$restaurant->id}}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Restaurant Name</label>
        <input type="name" name="name" value="{{$restaurant->name}}">
        @error('name')
            <p>{{message}}</p>
        @enderror
    </div>

    <div>
        <label for="name">Restaurant Name</label>
        <input type="name" name="name" value="{{$restaurant->name}}">
        @error('name')
            <p>{{message}}</p>
        @enderror
    </div>    
</form>