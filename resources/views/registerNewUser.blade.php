@extends('layouts.basic')
@section('content')
@include('flashMessages')
<div class="shadow-2xl p-12 max-w-sm mx-auto rounded @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
    <h1 class="mb-2 text-3xl text-center">
      BicycleStorage 2.0
    </h1>
    <h3 class="mb-6 text-xl text-center">
      Register new user
    </h3>

    <form action="{{ route("registerNewUser") }}" method="post">
        @csrf
      <label for="name" class="block mb-2">Name</label>
      <input name="name" id="name" type="text" maxlength="40" required autofocus placeholder="Example Name" class="block border rounded p-3 mb-3 w-full">

      <label for="email" class="block mb-2">Email</label>
      <input name="email" id="email" type="email" maxlength="40" required autofocus placeholder="user@example.com" class="block border rounded p-3 mb-3 w-full">

      <label for="password" class="block mb-2">Password</label>
      <input name="password" id="password" type="password" required maxlength="40" placeholder="**********" class="block border rounded p-3 mb-6 w-full">

      <button type="submit" class="login-button block text-lg font-bold bg-orange-400 w-full p-3 rounded text-black hover:bg-orange-500 hover:shadow-md">
          Sign up
        </button>
    </form>
    <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
</div>
  </div>
@endsection
