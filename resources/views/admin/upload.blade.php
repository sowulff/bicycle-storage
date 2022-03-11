@extends('layouts.basic')
@section('content')
@include('flashMessages')
    <div class="shadow-2xl p-12 mt-32 max-w-sm mx-auto rounded flex flex-col">
        <h1 class="text-3xl mx-auto font-bold">Upload new bicycle</h1>

        <form method="post" action="/upload" class="py-8">
            @csrf
            <div class="form-group">
                <label for="name" class="block w-56 text-slate-700">Name:</label>
                <input type="text" id="name" name="name" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">
            </div>

            <div class="form-group">
                <label for="image" class="block mt-2 w-56 text-slate-700">Image (URL):</label>
                <input type="url" id="image" name="image" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">
            </div>

            <div class="form-group">
                <label for="price" class="block mt-2 w-56 text-slate-700">Price:</label>
                <input type="number" id="price" name="price" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">
            </div>

            <div class="form-group">
                <label for="quantity" class="block mt-2 w-56 text-slate-700">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="rounded-md mb-2 border-2 pl-1 text-sm w-56">
            </div>

            <div class="form-group">
                <button style="cursor:pointer" type="submit"
                    class="bg-sky-600 hover:bg-sky-700 rounded-md mt-3 px-3 py-1 text-white font-bold text-sm">Submit</button>
            </div>

        </form>

        <a class="hover:underline hover:text-gray-500" href="/dashboard">&larr; Back</a>
    </div>
@endsection
