@extends('layouts.user.master')

@section('content')
    
<div>
    <form method="POST" action="/bookings/create/{{$restaurant->id}}">
        
    </form>    
</div>
@stop