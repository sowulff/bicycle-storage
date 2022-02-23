<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>To Do App</title>
</head>

<section class="px-4 py-4">
    <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-br from-emerald-400 to-sky-700 py-2">
        Register below!
      </h1>

<form method="post" action="/register" class="py-8">
    @csrf
    <div class="form-group">
        <label for="name" class="font-bold text-slate-700">Name:</label>
        <input type="text" id="name" name="name" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <label for="email" class="font-bold text-slate-700">Email:</label>
        <input type="email" id="email" name="email" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <label for="password" class="font-bold text-slate-700">Password:</label>
        <input type="password" id="password" name="password" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full mt-3 px-3 text-white font-bold text-sm">Submit</button>
    </div>

</form>
</section>
