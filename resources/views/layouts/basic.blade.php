<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }} ">
    <title>The Bicycle Storage</title>
</head>

<body>
    <div class="py-5 px-5">
        <a href="/dashboard" class="text-center font-bold block text-5xl text-transparent bg-clip-text py-4 px-4 bg-gradient-to-t from-pink-400 to-sky-500 hover:underline hover:text-sky-200">Bicycle Storage</a>
        @yield('content')
    </div>
</body>

</html>
