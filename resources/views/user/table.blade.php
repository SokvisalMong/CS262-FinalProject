@extends('layouts.admin.master')

@section('title')
{{'Users Table'}}
@endsection

@section('content')
<div class="mx-auto w-full">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-7 px-14">
                    ID
                </th>
                <th scope="col" class="py-7 px-14">
                    Name
                </th>
                <th scope="col" class="py-7 px-14">
                    Email
                </th>
                <th scope="col" class="py-7 px-14">
                    Password
                </th>
                <th scope="col" class="py-7 px-14">
                    Phone
                </th>
                <th scope="col" class="py-7 px-12">
                    First Name
                </th>
                <th scope="col" class="py-7 px-12">
                    Last Name
                </th>
                <th scope="col" class="py-7 px-6">
                    Delete
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($v_user as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->id}}</td>
                    <td class="py-7 px-14">{{$user->name}}</td>
                    <td class="py-7 px-14">{{$user->email}}</td>
                    <td class="py-7 px-14">{{$user->password}}</td>
                    <td class="py-7 px-14">{{$user->phone}}</td>
                    <td class="py-7 px-12">{{$user->firstname}}</td>
                    <td class="py-7 px-12">{{$user->lastname}}</td>
                    <td class="py-7 px-6">
                        <form method="POST" action="/users/{{$user->id}}">
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