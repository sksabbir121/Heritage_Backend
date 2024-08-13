<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $property = new Property();
        $property->description = $request->input('description');
        $property->location = $request->input('location');
        $property->price = $request->input('price');
        $property->image = $request->input('image');
        $property->save();
        return redirect()->route('properties.index');
    }

    public function show($id)
    {
        $property = Property::find($id);
        return view('properties.show', compact('property'));
    }

    public function edit($id)
    {
        $property = Property::find($id);
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->description = $request->input('description');
        $property->location = $request->input('location');
        $property->price = $request->input('price');
        $property->image = $request->input('image');
        $property->save();
        return redirect()->route('properties.index');
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('properties.index');
    }
}
