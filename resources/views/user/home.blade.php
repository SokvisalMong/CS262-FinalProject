@extends('layouts.user.master')

@section('title')
{{'Home'}}
@endsection

@section('content')
<div>
    @include('layouts.user.hero')
    <div class="mx-auto flex justify-center pt-32">
        <div class=" rounded overflow-hidden shadow-lg">
            <div class="px-6 py-6">
              <div class="font-bold text-xl mb-2 text-center">Restauranteurs Join Us Now</div>
              <p class="text-gray-700 text-base py-1">
                Join the more than 1,000 restaurants which fill seats and manage reservations with LOGO
              </p>
              <p class="text-gray-700 text-base text-center py-1">
                Contact Us
              </p>
              <p class="text-gray-700 text-base text-center py-1">
                023 996 111
              </p>
            </div>
        </div>
    </div>
    <div class="mx-auto flex justify-center pt-24 pb-20">
      <div class=" rounded overflow-hidden shadow-lg">
          <div class="px-6 py-6">
            <div class="font-bold text-xl mb-2 text-center">Manage your restaurant here</div>
            <p class="text-gray-700 text-base py-1">
              Make edits to your restaurant, manage customer bookings, etc.
            </p>
            <p class="text-gray-700 text-base text-center py-1">
              <a href="http://owner.localhost/" type="button" class="bg-blue-500 hover:bg-blue-700 text-white py-4 px-8 rounded-lg">Manage</a>
            </p>
          </div>
      </div>
  </div>

</div>
@stop