@extends('layouts.basic')
@section('content')

<div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded flex flex-col">
    <h2 class="text-3xl mx-auto">Here are all our bikes!</h2>
    @foreach ($bicycles as $bicycle)
    <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
        <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
        <img src="{{ $bicycle->image }}" alt="">
        <a href="buy/{{$bicycle->id}}">Select bike</a>
        <a href="favorite/{{$bicycle->id}}">Add to favourite</a>
    </div>
    @endforeach
    <a href="cartView">Go to cart</a>
    <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
</div>
@include('errors')
@endsection
