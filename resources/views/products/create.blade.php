<form action="{{  route('products.store') }}">
    @csrf
    <label for="name_product">Name:</label>
    <input type="text" name="name_product" id="name_product" value="">
    <br>
    <label for="category_product">Category:</label>
    <Select>
        <option value="" selected="selected">- SELECT -</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </Select>
    <br>
    <label for="description_product">Description:</label>
    <input type="text" name="description_product" id="description_product" value="">
    <br>
    <label for="price_product">Price:</label>
    <input type="decimal" name="price_product" id="price_product" value="">
    <br>
    <label for="stock_product">Stock:</label>
    <input type="number" name="stock_product" id="stock_product" value="">
    <br>
    <label for="imagen_product"></label>
    <img src="" alt="">
    <br>
    <input type="file" name="imagen_product" id="imagen_product">
    <br>
    <br>
    <input type="submit" value="Create">
</form>