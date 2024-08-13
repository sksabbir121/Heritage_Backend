// resources/views/properties/edit.blade.php

<h1>Edit Property</h1>

<form action="{{ route('properties.update', $property->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="description">Description:</label>
    <input type="text" id="description" name="description" value="{{ $property->description }}"><br><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value="{{ $property->location }}"><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" value="{{ $property->price }}"><br><br>
    <label for="image">Image:</label>
    <input type="text" id="image" name="image" value="{{ $property->image }}"><br><br>
    <button type="submit">Update</button>
</form>

<a href="{{ route('properties.index') }}">Back to Properties</a>
