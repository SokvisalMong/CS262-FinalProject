@extends('layouts.user.master')

@section('title')
{{'Home'}}
@endsection

@section('content')
<div>
    @include('layouts.user.hero')
    <div class="mx-auto flex justify-center">
        <img src="{{asset('images/loona-icons.jpg')}}" alt="loona-icons">
    </div>
</div>
@stop