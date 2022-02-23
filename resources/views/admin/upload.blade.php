<form method="post" action="/upload" class="py-8">
    @csrf
    <div class="form-group">
        <label for="name" class="font-bold text-slate-700">Name:</label>
        <input type="text" id="name" name="name" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <label for="image" class="font-bold text-slate-700">Image:</label>
        <input type="url" id="image" name="image" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>
    <div class="form-group">
        <label for="quantity" class="font-bold text-slate-700">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <label for="price" class="font-bold text-slate-700">Price:</label>
        <input type="number" id="price" name="price" class="rounded-md mb-2 border-2 pl-1 text-sm">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full mt-3 px-3 text-white font-bold text-sm">Submit</button>
    </div>

</form>
