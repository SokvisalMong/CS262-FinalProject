@extends('dashboard.dashmaster')

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Date
                </th>
                <th scope="col" class="py-3 px-6">
                    Time
                </th>
                <th scope="col" class="py-3 px-6">
                    Party Size
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Example 
                </th>
                <td class="py-4 px-6">
                    Example 
                </td>
                <td class="py-4 px-6">
                    Example 
                </td>
                <td class="py-4 px-6">
                    Example 
                </td>
                <td class="py-4 px-6">
                    Example 
                </td>
            </tr>
            @foreach ($v_bookings as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td>{{$item->booking_id}}</td>
                    <td>{{$item->booking_date}}</td>
                    <td>{{$item->booking_time}}</td>
                    <td>{{$item->party_size}}</td>
                    <td>{{$item->booking_status}}</td>
                </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@stop