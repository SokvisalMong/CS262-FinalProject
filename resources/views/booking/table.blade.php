@extends('layouts.admin.master')

@section('title')
{{'Booking Table'}}
@endsection

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-ms text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-7 px-14">
                    ID
                </th>
                <th scope="col" class="py-7 px-14">
                    Rest_ID
                </th>
                <th scope="col" class="py-7 px-14">
                    User_ID
                </th>
                <th scope="col" class="py-7 px-14">
                    Status
                </th>
                <th scope="col" class="py-7 px-14">
                    Date
                </th>
                <th scope="col" class="py-7 px-14">
                    Time
                </th>
                <th scope="col" class="py-7 px-14">
                    Size
                </th>
                <th scope="col" class="py-7 px-14">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($v_booking as $booking)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$booking->id}}</td>
                    <td class="py-7 px-14">{{$booking->restaurant_id}}</td>
                    <td class="py-7 px-14">{{$booking->user_id}}</td>
                    <td class="py-7 px-14">{{$booking->status}}</td>
                    <td class="py-7 px-14">{{$booking->date}}</td>
                    <td class="py-7 px-14">{{$booking->time}}</td>
                    <td class="py-7 px-14">{{$booking->size}}</td>
                    <td class="py-7 px-14"></td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@stop