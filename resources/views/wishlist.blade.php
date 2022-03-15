@extends('layouts.basic')
@section('content')
@include('flashMessages')

<div class="shadow-2xl p-12 max-w-sm mx-auto rounded flex flex-col @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
    <a class="hover:underline hover:text-gray-500 mb-4" href="/dashboard">&larr; Back</a>
    <h2 class="text-3xl mx-auto">Your favorite bicycles!</h2>
    @if (\Session::has('success'))
    <div class="bg-green-400 py-2 mt-2 rounded-md">
        <p class="text-center "> {!! \Session::get('success') !!}</p>
    </div>
    @endif
    @if (\Session::has('deleted'))
    <div class="bg-red-400 py-2 mt-2 rounded-md">
        <p class="text-center "> {!! \Session::get('deleted') !!}</p>
    </div>
    @endif

    <?php $display_favorite = true; ?>
    @foreach ($bicycles as $bicycle)
        @foreach ($wishlist as $wishitem)
            @if ($wishitem->favorite && $wishitem->bicycle_id == $bicycle->id && $wishitem->user_id == Auth::id())
                <div class="mt-5">
                    <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
                    <img src="{{ $bicycle->image }}" alt="">

                    <div class="flex flex-col">
                        <a href="buy/{{$bicycle->id}}">Select bike 🛒</a>
                        <a href="removeFavorite/{{$wishitem->id}}">Remove from wishlist ❌</a>
                    </div>
                </div>
                <?php $display_favorite = false; ?>
                @break
            @endif
        @endforeach
    @endforeach
    @if ($display_favorite)
        <p class="text-xl mt-14 mx-auto text-center">The wishlist is empty 😢</p>
        <a class="mt-5 mx-auto" href="{{ route('bicycleAll') }}">Click here to view all bicycles</a>
    @endif
@include('errors')

@endsection
