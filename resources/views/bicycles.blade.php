@extends('layouts.basic')
@section('content')
@include('flashMessages')
    <div class="shadow-2xl p-12 w-fit mx-auto rounded flex flex-col @if ($errors->any()) mt-12 @elseif (Session::get('success')) mt-12 @else mt-32 @endif">
        <a class="hover:underline hover:text-gray-500 mb-8" href="/dashboard">&larr; Back</a>
        <h2 class="text-3xl mx-auto font-bold">Here are all our bikes!</h2>
        @foreach ($bicycles as $bicycle)
            <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
                <p class="text-xl pb-2 font-bold">{{ $bicycle->name }}</p>
                <p class="text-xl pb-2"> {{$bicycle->price . 'kr' }}</p>
                <img src="{{ $bicycle->image }}" alt="{{ $bicycle->name }}">
            </div>
        @endforeach



<div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded flex flex-col">
    <h2 class="text-3xl mx-auto">Here are all our bikes!</h2>
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

    @foreach ($bicycles as $bicycle)
    <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
        <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
        <img src="{{ $bicycle->image }}" alt="">
        <div class="flex justify-evenly mt-4">
            <a class="rounded-md bg-yellow-400 py-1 px-3 " href="edit/{{ $bicycle->id }}">edit</a>
            <form action="{{ route('deleteBicycle', $bicycle) }}" method="post">
                @csrf
                <button type="submit" onclick="return confirm('Are you you whant to delete this bicycle?')" class=" bg-red-400 py-1 px-3 rounded-md hover:bg-red-500 ">delete</button>
            </form>
        </div>
    </div>

    @endforeach
    <div class="flex justify-between">
        <a class="hover:underline hover:text-gray-500 mt-8" href="/dashboard">&larr; Back</a>
        <a class="hover:underline hover:text-gray-500 mt-8 scroll-smooth" href="#">&uarr; Top</a>
    </div>
</div>

@include('errors')

@endsection
