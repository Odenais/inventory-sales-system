<form action="{{ route('categories.update', $Category) }}" method="post">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $Category->name }}">
    <label for="description">Description:</label>
    <input type="text" name="description" id="description" value="{{ $Category->description }}">
    <input type="submit" value="Create">
</form>