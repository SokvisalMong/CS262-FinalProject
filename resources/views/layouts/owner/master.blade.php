<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="font-sans bg-gray-200">
    @auth('owner')
        <div class="flex">
            @include('layouts.owner.navbar')
            @yield('content')
        </div>
    @else
        <div class="h-full">
            @include('layouts.owner.sidebar')
            @yield('content')
        </div>
    @endauth
</body>
</html>