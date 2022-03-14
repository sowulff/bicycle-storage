@extends('layouts.basic')
@section('content')
@include('flashMessages')
    <div class="shadow-2xl p-12 w-fit mx-auto rounded @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
        <a class="hover:underline hover:text-gray-500 block mb-6" href="/dashboard">&larr; Back</a>
        <h1 class="text-3xl font-bold underline text-center">Edit user details</h1>
            <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
                <p class="text-lg pb-2 font-bold">{{ $user->name }}</p>
                <p class="text-base pb-2 mb-6">{{ $user->email }}</p>
                    <form action="{{ route('editUser', $user) }}" method="post">
                        @csrf
                      <label for="name" class="block mb-2">Name</label>
                      <input name="name" id="name" type="text" maxlength="40" required autofocus placeholder="Example Name" class="block border rounded p-3 mb-3 w-full" value="{{ old('name') ?? $user->name }}">

                      <label for="email" class="block mb-2">Email</label>
                      <input name="email" id="email" type="email" maxlength="40" required autofocus placeholder="user@example.com" class="block border rounded p-3 mb-3 w-full" value="{{ old('email') ?? $user->email }}">

                      <label for="password" class="block mb-2">Password</label>
                      <input name="password" id="password" type="password" required maxlength="40" placeholder="**********" class="block border rounded p-3 mb-6 w-full">

                      <button type="submit" class="login-button block text-lg font-bold bg-orange-400 w-full p-3 rounded text-black hover:bg-orange-500 hover:shadow-md">
                          Update user
                        </button>
                    </form>
    <a class="hover:underline hover:text-gray-500 mt-8" href="/adminPanel">&larr; Back</a>
    </div>
@endsection
