@extends('dashboard.dashmaster')

@section('content')

{{-- <div class="overflow-x-auto relative">
    <table class="text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr scope="col" class="py-3 px-6">
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <tr>
                <td>0</td>
                <td>dummy</td>
                <td>dummy@mail.com</td>
                <td>dummy123</td>
            </tr>
            @foreach ($v_admins as $item)
                <tr>
                    <td>{{$item->admin_id}}</td>
                    <td>{{$item->admin_username}}</td>
                    <td>{{$item->admin_email}}</td>
                    <td>{{$item->admin_password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}



<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Username
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Example ID
                </th>
                <td class="py-4 px-6">
                    Example Admin
                </td>
                <td class="py-4 px-6">
                    Example Email
                </td>
            </tr>
            @foreach ($v_admins as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item->admin_id}}</td>
                <td class="py-4 px-6">{{$item->admin_username}}</td>
                <td class="py-4 px-6">{{$item->admin_email}}</td>
                <td class="py-4 px-6">{{$item->admin_password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop