@extends('layouts.basic')
@section('content')
    @include('flashMessages')
    <div
        class="shadow-2xl p-12 w-fit mx-auto rounded  @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
        <a class="hover:underline hover:text-gray-500 block mb-6" href="/dashboard">&larr; Back</a>
        <h1 class="text-3xl font-bold underline text-center">List of all users</h1>
        @foreach ($users as $user)
            <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
                <p class="text-lg pb-2 font-bold">{{ $user->name }}</p>
                <p class="text-base pb-2">{{ $user->email }}</p>
                <p class="text-base pb-2">Is admin:
                    @if ($user->is_admin)
                        <b>Yes</b>
                        <form action="{{ route('removeAdmin', $user) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 py-1 px-1 rounded-md mb-2">Remove
                                admin</button>
                        </form>
                    @else
                        No
                        <form action="{{ route('makeAdmin', $user) }}" method="post">
                            @csrf
                            <button type="submit" class="bg-green-400 hover:bg-green-500 py-1 px-1 rounded-md mb-2">Make
                                admin</button>
                        </form>
                    @endif
                </p>
                <form action="{{ route('removeUser', $user) }}" method="post">
                    @csrf
                    <button type="submit" class="bg-red-400 py-1 px-1 rounded-md hover:bg-red-500 mb-2">Remove user</button>
                </form>
                <a class="underline text-sky-300 hover:text-sky-500" href="/editUser/{{ $user->id }}">Update user
                    details</a>

            </div>
        @endforeach
        <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
    </div>
@endsection
