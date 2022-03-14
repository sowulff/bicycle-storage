@if ($message = Session::get('success'))
<div class="bg-green-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
    <strong class="flex justify-center text-green-500">{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="bg-red-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
    <strong class="flex justify-center text-red-500">{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="bg-yellow-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
    <strong class="flex justify-center text-yellow-500">{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="bgyellow-red-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
    <strong class="flex justify-center text-red-500">{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="bg-red-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
    <p class="flex justify-center text-red-500">Please check the form for errors</p>
</div>
@endif
