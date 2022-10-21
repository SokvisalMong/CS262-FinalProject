@extends('layouts.admin.master')

@section('title')
{{'Booking Table'}}
@endsection

@section('content')
<div class="mx-auto w-full">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-ms text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-7 px-14">
                    ID
                </th>
                <th scope="col" class="py-7 px-14">
                    Rest Name
                </th>
                <th scope="col" class="py-7 px-14">
                    User Name
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
                    <td class="py-7 px-14">{{$booking->restaurant()->first()->name}}</td>
                    <td class="py-7 px-14">{{$booking->user()->first()->name}}</td>
                    <td class="py-7 px-14">{{$booking->status}}</td>
                    <td class="py-7 px-14">{{$booking->date}}</td>
                    <td class="py-7 px-14">{{$booking->time}}</td>
                    <td class="py-7 px-14">{{$booking->size}}</td>
                    <td class="py-7 px-14">
                        <form method="POST" action="/bookings/{{$booking->id}}">
                            @csrf
                            @method('DELETE')
                            <button>
                              Delete
                            </button>
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@stop