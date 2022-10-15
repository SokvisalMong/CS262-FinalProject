@extends('layouts.master')
@section('content')
    <div class="">
        @include('layouts.hero')
        {{-- image for example --}}
        <div class="mx-auto flex justify-center">
            <img src="{{ asset('images/loona-icons.jpg') }}" alt="loona-icons">
        </div>
    </div>
@endsection