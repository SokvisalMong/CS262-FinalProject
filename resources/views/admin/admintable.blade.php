@extends('layouts.admin.master')

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-7 px-14">
                    ID
                </th>
                <th scope="col" class="py-7 px-14">
                    Username
                </th>
                <th scope="col" class="py-7 px-14">
                    Email
                </th>
                <th scope="col" class="py-7 px-14">
                    Password
                </th>
                <th scope="col" class="py-7 px-14">
                    Edit
                </th>
                <th scope="col" class="py-7 px-14">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Example 
                </th>
                <td class="py-7 px-14">
                    Example 
                </td>
                <td class="py-7 px-14">
                    Example 
                </td>
                <td class="py-7 px-14">
                    Example
                </td>
                <td class="py-7 px-14">
                    Example
                </td>
                <td class="py-7 px-14">
                    Example
                </td>
            </tr>
            @foreach ($v_admin as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item->admin_id}}</td>
                <td class="py-7 px-14">{{$item->admin_username}}</td>
                <td class="py-7 px-14">{{$item->admin_email}}</td>
                <td class="py-7 px-14">{{$item->admin_password}}</td>
                <td class="py-7 px-14"></td>
                <td class="py-7 px-14"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop