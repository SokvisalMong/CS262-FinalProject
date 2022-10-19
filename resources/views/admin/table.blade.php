@extends('layouts.admin.master')

@section('title')
{{'Admin Table'}}
@endsection

@section('content')
<div class="mx-20 mt-14">
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
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($v_admin as $admin)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$admin->id}}</td>
                <td class="py-7 px-14">{{$admin->name}}</td>
                <td class="py-7 px-14">{{$admin->email}}</td>
                <td class="py-7 px-14">{{$admin->password}}</td>
                <td class="py-7 px-14">
                    <form method="POST" action="/admins/{{$admin->id}}">
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