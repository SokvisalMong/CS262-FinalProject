@extends('layouts.admin.master')

@section('title')
{{'Admin Table'}}
@endsection

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-ms text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-6 px-9">
                    ID
                </th>
                <th scope="col" class="py-6 px-9">
                    Owner ID
                </th>
                <th scope="col" class="py-6 px-9">
                    Name
                </th>
                <th scope="col" class="py-6 px-9">
                    Payment
                </th>
                <th scope="col" class="py-6 px-9">
                    HOO
                </th>
                <th scope="col" class="py-6 px-9">
                    Cuisines
                </th>
                <th scope="col" class="py-6 px-9">
                    Dress Code
                </th>
                <th scope="col" class="py-6 px-9">
                    Price
                </th>
                <th scope="col" class="py-6 px-9">
                    Website
                </th>
                <th scope="col" class="py-6 px-9">
                    Mobile
                </th>
                <th scope="col" class="py-6 px-9">
                    Email
                </th>
                <th scope="col" class="py-6 px-9">
                    Description
                </th>
                <th scope="col" class="py-6 px-9">
                    Delete
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($v_restaurant as $restaurant)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-7 px-14 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$restaurant->id}}</td>
                <td class="py-6 px-9">{{$restaurant->owner_id}}</td>
                <td class="py-6 px-9">{{$restaurant->name}}</td>
                <td class="py-6 px-9">{{$restaurant->payment}}</td>
                <td class="py-6 px-9">{{$restaurant->hoo}}</td>
                <td class="py-6 px-9">{{$restaurant->cuisines}}</td>
                <td class="py-6 px-9">{{$restaurant->dress_code}}</td>
                <td class="py-6 px-9">{{$restaurant->price_higher}}$-{{$restaurant->price_lower}}$</td>
                <td class="py-6 px-9">{{$restaurant->website}}</td>
                <td class="py-6 px-9">{{$restaurant->phone}}</td>
                <td class="py-6 px-9">{{$restaurant->email}}</td>
                <td class="py-6 px-9">{{$restaurant->description}}</td>
                <td class="py-6 px-9">
                    <form method="POST" action="/restaurants/{{$restaurant->id}}">
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