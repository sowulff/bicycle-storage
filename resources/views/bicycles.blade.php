@extends('layouts.basic')
@section('content')
@include('flashMessages')
    <div class="shadow-2xl p-12 max-w-sm mx-auto rounded flex flex-col @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
        <a class="hover:underline hover:text-gray-500 mb-8" href="/dashboard">&larr; Back</a>
        <h2 class="text-3xl mx-auto">Here are all our bikes!</h2>
        @foreach ($bicycles as $bicycle)
            <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
                <p class="text-xl pb-2">{{ $bicycle->name . ' ' . '(' . $bicycle->price . 'kr)' }}</p>
                <img src="{{ $bicycle->image }}" alt="">
            </div>
        @endforeach

        <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
    </div>
@endsection
