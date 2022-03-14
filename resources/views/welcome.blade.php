@extends('layouts.basic')
@section('content')
<div class="shadow-2xl p-12 mt-32 w-fit mx-auto rounded">
    <h1 class="mb-6 text-3xl text-center">
      BicycleStorage 2.0
    </h1>

    <form action="login" method="post">
        @csrf
      <label for="email" class="block mb-2">Email</label>
      <input name="email" id="email" type="email" maxlength="40" required autofocus placeholder="user@example.com" class="block border rounded p-3 mb-3 w-full">

      <label for="password" class="block mb-2">Password</label>
      <input name="password" id="password" type="password" required maxlength="40" placeholder="**********" class="block border rounded p-3 mb-6 w-full">

      <button type="submit" class="login-button block text-lg font-bold bg-orange-400 w-full p-3 rounded text-black hover:bg-orange-500 hover:shadow-md">
          Login
        </button>
    </form>
    <a class="block text-center mt-4 hover:text-slate-400 hover:underline" href="/registerNewUser">No account? Register here!</a>
  </div>
{{-- @include('errors') --}}
@include('flashMessages')
@endsection
