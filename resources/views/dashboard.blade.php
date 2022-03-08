@extends('layouts.basic')
@section('content')
    <div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded">
        <h1 class="mb-2 text-3xl text-center">
            BicycleStorage 2.0
        </h1>
        <h3 class="text-xl mb-4 text-center">Hello, {{ $user->name }}!</h3>

        <div class="flex flex-col">
            @if ($user->is_admin)
                <a class="underline text-sky-300 hover:text-sky-500" href="admin">Add new bike here!</a>
            @endif
            <a class="underline text-sky-300 hover:text-sky-500" href="bicycles/all">See all our bikes here!</a>
            @if ($user->is_admin)
                <a class="underline text-sky-300 hover:text-sky-500" href="adminPanel">Admin panel</a>
            @endif

            <p class="">Do you want to <a href="logout"
                    class="underline text-rose-400 hover:text-rose-600">logout</a>?</p>
        </div>
    </div>
    @include('errors')
@endsection
