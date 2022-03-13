@extends('layouts.basic')
@section('content')

<div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded flex flex-col">
    <h2 class="text-3xl mx-auto">Here are all our bikes!</h2>
    @foreach ($bicycles as $bicycle)
        <?php $display_favorite = true; ?>
    <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
        <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
        <img src="{{ $bicycle->image }}" alt="">
        <a href="buy/{{$bicycle->id}}">Select bike</a>
        @foreach ($wishlist as $wishitem)
            @if ($wishitem->favorite && $wishitem->bicycle_id == $bicycle->id && $wishitem->user_id == Auth::id())
                <a href="removeFavorite/{{$wishitem->id}}">Remove from favorites ❌</a>
                <?php $display_favorite = false; ?>
                @break
            @endif
        @endforeach
        @if ($display_favorite)
            <a href="favorite/{{$bicycle->id}}">Add to favorites ✅</a>
        @endif
    </div>
    @endforeach
    <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
</div>
@include('errors')
@endsection
