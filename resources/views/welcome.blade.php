@extends('layouts.basic')
@section('content')
    <h1>Welcome</h1>

<div class="">
    <form action="login" method="post">
        @csrf

        <label for="email" class="font-bold text-slate-700">Email</label>
        <input name="email" id="email" type="email" class="rounded-md mb-2 border-2 pl-1 text-sm" />

        <label for="password" class="font-bold text-slate-700">Password</label>
        <input name="password" id="password" type="password" class="rounded-md border-2 pl-1 text-sm"/>

    <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full mt-3 px-3 text-white font-bold text-sm">Login</button>
    </form>
</div>
    @include('errors')
@endsection
