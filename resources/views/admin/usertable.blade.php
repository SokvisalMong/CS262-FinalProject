@extends('layouts.admin.master')

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    First Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Last Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Mobile
                </th>
                <th scope="col" class="py-3 px-6">
                    Password
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
                <td class="py-4 px-6">
                    Example 
                </td>
            </tr>
            @foreach ($v_user as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item->user_id}}</td>
                    <td>{{$item->user_email}}</td>
                    <td>{{$item->user_firstname}}</td>
                    <td>{{$item->user_lastname}}</td>
                    <td>{{$item->user_mobile}}</td>
                    <td>{{$item->user_password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop