@extends('layouts.basic')
@section('content')



@foreach ($users as $user)
<div class="shadow-sm p-12 min-w-[300px] max-w-sm mx-auto rounded flex flex-col mt-4">
    <p class="text-lg pb-2">{{$user->name . " " . '(' . $user->email . ')'}}</p>
</div>

@endforeach

@include('errors')
@endsection
