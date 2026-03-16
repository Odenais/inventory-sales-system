<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Name:</label>
    <input autocomplete="off" type="text" name="name" id="name" value="">
    <br>
    <label for="category">Category:</label>
    <select name="category_id" id="category_id">
        <option value="" selected="selected">- SELECT -</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </Select>
    <br>
    <label for="description">Description:</label>
    <input autocomplete="off" type="text" name="description" id="description" value="">
    <br>
    <label for="price">Price:</label>
    <input autocomplete="off" type="number" name="price" id="price">
    <br>
    <label for="stock">Stock:</label>
    <input autocomplete="off" type="number" name="stock" id="stock" value="">
    <br>
    <label for="image"></label>
    <img src="" alt="">
    <br>
    <input type="file" name="image" id="image">
    <br>
    <br>
    <input type="submit" value="Create">
</form>