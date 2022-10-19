@extends('layouts.admin.master')

@section('title')
{{'Admin Table'}}
@endsection

@section('content')
<div class="mx-20 mt-14">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-6 px-7">
                    ID
                </th>
                <th scope="col" class="py-6 px-7">
                    Owner ID
                </th>
                <th scope="col" class="py-6 px-7">
                    Name
                </th>
                <th scope="col" class="py-6 px-7">
                    Payment
                </th>
                <th scope="col" class="py-6 px-7">
                    HOO
                </th>
                <th scope="col" class="py-6 px-7">
                    Cuisines
                </th>
                <th scope="col" class="py-6 px-7">
                    Dress Code
                </th>
                <th scope="col" class="py-6 px-7">
                    Price
                </th>
                <th scope="col" class="py-6 px-7">
                    Website
                </th>
                <th scope="col" class="py-6 px-7">
                    Mobile
                </th>
                <th scope="col" class="py-6 px-7">
                    Email
                </th>
                <th scope="col" class="py-6 px-7">
                    Description
                </th>
                <th scope="col" class="py-6 px-7">
                    Delete
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($v_restaurant as $restaurant)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="py-6 px-7 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$restaurant->id}}</td>
                <td class="py-6 px-7">{{$restaurant->owner_id}}</td>
                <td class="py-6 px-7">{{$restaurant->name}}</td>
                <td class="py-6 px-7">{{$restaurant->payment}}</td>
                <td class="py-6 px-7">{{$restaurant->hoo}}</td>
                <td class="py-6 px-7">{{$restaurant->cuisines}}</td>
                <td class="py-6 px-7">{{$restaurant->dress_code}}</td>
                <td class="py-6 px-7">{{$restaurant->price_higher}} - {{$restaurant->price_lower}}</td>
                <td class="py-6 px-7">{{$restaurant->website}}</td>
                <td class="py-6 px-7">{{$restaurant->phone}}</td>
                <td class="py-6 px-7">{{$restaurant->email}}</td>
                <td class="py-6 px-7">{{$restaurant->description}}</td>
                <td class="py-6 px-7"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop