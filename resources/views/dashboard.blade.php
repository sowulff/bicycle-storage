@extends('layouts.basic')
@section('content')

<section class="">
<div class="flex flex-col items-center bg-gray-300">
    <p class="text-orange-500">Hello, {{ $user->name }}!</p>
    <p class="">Do you want to <a href="logout" class="underline text-rose-600">logout</a>?</p>
</div>

{{-- @include('errors') --}}

<h1>Hello, {{ $user->name }}!</h1>
<a class="underline text-sky-300" href="admin">Add new bike here!</a>

@endsection
