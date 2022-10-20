<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>

    <script defer src="https://unpkg.com/alpinejs"></script>
</head>
<body class="font-sans bg-gray-200">
    
    @auth('admin')
        <div class="flex">
            @include('layouts.components.alert')
            @include('layouts.admin.sidebar')
            @yield('content')
            
        </div>
    @else
        <div class="flex flex-col min-h-screen">
            @include('layouts.components.alert')
            @include('layouts.admin.navbar')
            @yield('content')
            @include('layouts.admin.footer')
        </div>
    @endauth

</body>
</html>