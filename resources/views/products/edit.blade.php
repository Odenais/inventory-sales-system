<form action="{{  route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input autocomplete="off" type="text" name="name" id="name" value="{{  $product->name }}">
    <br>
    <label for="category_id">Category:</label>
    <Select name="category_id" id="category_id">
        @foreach ($categories as $category)
        @if ($category->id == $product->category_id)
        <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
        @endif
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </Select>
    <br>
    <label for="description">Description:</label>
    <input autocomplete="off" type="text" name="description" id="description" value="{{ $product->description }}">
    <br>
    <label for="price">Price:</label>
    <input autocomplete="off" type="decimal" name="price" id="price" value="{{ $product->price }}">
    <br>
    <label for="stock">Stock:</label>
    <input autocomplete="off" type="number" name="stock" id="stock" value="{{ $product->stock }}">
    <br>
    <label for="image"></label>
    <img src="{{  asset('storage/' . $product->image) }}" alt="" width="150px">
    <br>
    <input type="file" name="image" id="image">
    <input type="submit" value="Update">
</form>