@extends('layouts.basic')
@section('content')


<div class="shadow-xl p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
    <a class="hover:underline hover:text-gray-500 mb-4" href="{{ route('bicycleAll') }}">&larr; Back</a>

    @if (\Session::has('fail'))
    <div class="bg-red-400 py-2 mt-2 rounded-md">
        <p class="text-center "> {!! \Session::get('fail') !!}</p>
    </div>
    @endif


    <p class="text-xl pb-2 mt-14">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
    <p>{{$bicycle->quantity . ' st'}}</p>
    <img src="{{ $bicycle->image }}" alt="">
    <form action="{{ route('orderBike', $bicycle)}}" method="POST">
        @csrf
        <label for="quantity" class="block mt-2 w-56 text-slate-700">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="rounded-md mb-2 border-2 pl-1 text-sm w-56" value="1" min="0">

        <button>Make order</button>
    </form>
</div>



@endsection
