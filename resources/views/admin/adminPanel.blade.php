@extends('layouts.basic')
@section('content')
    <div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded">
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
                            <button type="submit">Remove admin</button>
                        </form>
                    @else
                        No
                        <form action="{{ route('makeAdmin', $user) }}" method="post">
                            @csrf
                            <button type="submit">Make admin</button>
                        </form>
                    @endif
                </p>

            </div>

    @endforeach
    <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
    </div>
    @include('errors')
@endsection
