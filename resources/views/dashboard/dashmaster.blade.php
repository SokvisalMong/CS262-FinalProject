<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="font-sans bg-gray-500">
    
    <div class="flex">
        @include('dashboard.dashsidebar')
        @yield('content')
    </div>

</body>
</html>