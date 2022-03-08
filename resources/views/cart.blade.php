@extends('layouts.basic')
@section('content')

<h2>Buy your bike here</h2>
@foreach ($bicycle as $bicycle)
<div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
    <p class="text-xl pb-2">{{$bicycle->name . " " . '(' . $bicycle->price . 'kr)'}}</p>
    <img src="{{ $bicycle->image }}" alt="">
</div>
@endforeach
<form action="">
    <form action="">
        <div class="form-group">
            <label for="quantity" class="block mt-2 w-56 text-slate-700">Quantity:</label>
            <input type="number" id="quantity" name="quantity" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">
        </div>
    </form>
</form>


@endsection
