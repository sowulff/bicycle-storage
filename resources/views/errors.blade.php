@if ($errors->any())
    <div class="bg-red-300 rounded-md py-3 px-3 w-fit mx-auto mt-6">
        <p class="flex justify-center text-red-500">
            <u>{{ $errors->first() }}</u>
        </p>
    </div>
@endif
