<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <h1>Welcome</h1>

    <form action="login" method="post">
        @csrf

        <label for="email" class="font-bold text-slate-700">Email</label>
        <input name="email" id="email" type="email" class="rounded-md mb-2 border-2 pl-1 text-sm" />
    </div>
    <div>
        <label for="password" class="font-bold text-slate-700">Password</label>
        <input name="password" id="password" type="password" class="rounded-md border-2 pl-1 text-sm"/>
    </div>
    <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full mt-3 px-3 text-white font-bold text-sm">Login</button>
    </form>
</body>
</html>
