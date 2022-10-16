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
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Payment Option
                </th>
                <th scope="col" class="py-3 px-6">
                    Hours of Operation
                </th>
                <th scope="col" class="py-3 px-6">
                    Cuisines
                </th>
                <td class="py-4 px-6">
                    Dress Code
                </td>
                <td class="py-4 px-6">
                    Website
                </td>
                <td class="py-4 px-6">
                    Mobile
                </td>
                <td class="py-4 px-6">
                    Email
                </td>
                <td class="py-4 px-6">
                    Price Range
                </td>
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
                <td class="py-4 px-6">
                    Example - Example
                </td>
            </tr>
            @foreach ($v_restaurants as $item)
                <td>{{$item->restaurant_id}}</td>
                <td>{{$item->restaurant_name}}</td>
                <td>{{$item->payment_options}}</td>
                <td>{{$item->hours_of_operation}}</td>
                <td>{{$item->cuisines}}</td>
                <td>{{$item->dress_code}}</td>
                <td>{{$item->restaurant_website}}</td>
                <td>{{$item->restaurant_mobile}}</td>
                <td>{{$item->restaurant_email}}</td>
                <td>{{$item->price_range_lower}} - {{$item->price_range_higher}}</td>
            @endforeach
        </tbody>
    </table>
</div>

@stop