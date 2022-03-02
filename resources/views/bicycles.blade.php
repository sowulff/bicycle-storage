@extends('layouts.basic')
@section('content')

@foreach ($bicycles as $bicycle)
<p>{{$bicycle->name}}</p>

@endforeach

@endsection
