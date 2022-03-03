@if ($errors->any())
<p class="flex justify-center text-red-500">
    <u>{{ $errors->first() }}</u>
</p>
@endif
