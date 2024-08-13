// resources/views/properties/index.blade.php

<h1>Properties</h1>

<ul>
    @foreach($properties as $property)
        <li>
            {{ $property->description }} ({{ $property->location }})
            <a href="{{ route('properties.show', $property->id) }}">View</a>
            <a href="{{ route('properties.edit', $property->id) }}">Edit</a>
            <form action="{{ route('properties.destroy', $property->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('properties.create') }}">Create New Property</a>
