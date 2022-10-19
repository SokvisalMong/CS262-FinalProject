<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="font-sans bg-gray-200">
    
    <div class="flex">
        @include('layouts.admin.sidebar')
        @yield('content')
    </div>

</body>
</html>