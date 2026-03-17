<form action="{{  route('products.update', $product) }}">
    @csrf
    @method('PUT')
    <label for="name_product">Name:</label>
    <input type="text" name="name_product" id="name_product" value="{{  $product->name }}">
    <br>
    <label for="category_product">Category:</label>
    <Select>
        @foreach ($categories as $category)
        @if ($category->id == $product->category_id)
        <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
        @endif
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </Select>
    <br>
    <label for="description_product">Description:</label>
    <input type="text" name="description_product" id="description_product" value="{{ $product->description }}">
    <br>
    <label for="price_product">Price:</label>
    <input type="decimal" name="price_product" id="price_product" value="{{ $product->price }}">
    <br>
    <label for="stock_product">Stock:</label>
    <input type="number" name="stock_product" id="stock_product" value="{{ $product->stock }}">
    <br>
    <label for="imagen_product"></label>
    <img src="{{  asset('storage/' . $product->image) }}" alt="" width="150px">
    <br>
    <input type="file" name="imagen_product" id="imagen_product">
    <input type="submit" value="Update">
</form>