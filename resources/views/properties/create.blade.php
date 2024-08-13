// resources/views/properties/create.blade.php

<h1>Create New Property</h1>

<form action="{{ route('properties.store') }}" method="post">
    @csrf
    <label for="description">Description:</label>
    <input type="text" id="description" name="description"><br><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location"><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price"><br><br>
    <label for="image">Image:</label>
    <input type="text" id="image" name="image"><br><br>
    <button type="submit">Create</button>
</form>
