// resources/views/properties/show.blade.php

<h1>{{ $property->description }} ({{ $property->location }})</h1>

<p>Price: {{ $property->price }}</p>

<img src="{{ asset('images/' . $property->image) }}" alt="{{ $property->description }}" width="200" height="150">

<a href="{{ route('properties.index') }}">Back to Properties</a>
