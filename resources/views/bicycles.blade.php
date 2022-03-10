@extends('layouts.basic')
@section('content')

@if (\Session::has('success'))
<div class="alert alert-success">
    {!! \Session::get('success') !!}
</div>
@endif
<div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded flex flex-col">
    <h2 class="text-3xl mx-auto">Here are all our bikes!</h2>
    @foreach ($bicycles as $bicycle)
    <div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
        <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
        <img src="{{ $bicycle->image }}" alt="">
        <div class="flex justify-evenly mt-4">
            <a class="rounded-md bg-yellow-400 py-1 px-1 " href="edit/{{ $bicycle->id }}">edit</a>
            <form action="{{ route('deleteBicycle', $bicycle) }}" method="post">
                @csrf
                <button type="submit" class="bg-red-400 py-1 px-1 rounded-md hover:bg-red-500">delete</button>
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
