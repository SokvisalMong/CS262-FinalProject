<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    {{-- script --}}
    <script defer src="https://unpkg.com/alpinejs"></script>
    
</head>
<body class="flex flex-col min-h-screen">
    
    @include('layouts.components.alert')
    @include('layouts.user.navbar')
    @yield('content')
    @include('layouts.user.footer')
    
</body>
</html>