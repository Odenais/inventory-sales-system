<form action="{{ route('categories.update', $Category) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name_category" id="name_category" value="{{ $Category->name }}">
    <label for="description">Description:</label>
    <input type="text" name="description_category" id="description_category" value="{{ $Category->description }}">
    <input type="submit" value="Update">
</form>