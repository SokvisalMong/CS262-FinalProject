<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="mx-40 font-sans">
    @include('layouts.owner.navbar')
    
    @yield('content')

    @include('layouts.owner.footer')
</body>
</html>