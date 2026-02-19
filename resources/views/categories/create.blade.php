<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="description">Description:</label>
    <input type="text" name="description" id="description">
    <input type="submit" value="Create">
</form>