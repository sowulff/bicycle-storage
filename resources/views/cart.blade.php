@extends('layouts.basic')
@section('content')

<h2>Order your HELLO</h2>
@foreach ($bicycle as $bicycle)
<div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
    <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
    <p>{{$bicycle->quantity . ' st'}}</p>
    <img src="{{ $bicycle->image }}" alt="">
    <form action="{{ route('orderBike', $bicycle)}}" method="POST">
        @csrf
        <label for="quantity" class="block mt-2 w-56 text-slate-700">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">

        <button>Make order</button>
    </form>
</div>
@endforeach


@endsection
