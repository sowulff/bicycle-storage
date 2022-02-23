<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>To Do App</title>
</head>

<section class="">
<div class="flex flex-col items-center bg-gray-300">
    <p class="text-orange-500">Hello, {{ $user->name }}!</p>
        <p class="">Do you want to <a href="logout" class="underline text-rose-600">logout</a>?</p>
</div>

{{-- @include('errors') --}}

<h1>Hello, {{ $user->name }}!</h1>
