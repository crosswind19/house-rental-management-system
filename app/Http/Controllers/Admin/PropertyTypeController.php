<?php

namespace App\Http\Controllers\Admin;

use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyTypeController extends Controller
{
    public function index()
    {
        $propertyTypes = PropertyType::all();
        return view('admin.property_types.index', compact('propertyTypes'));
    }

    public function create()
    {
        return view('admin.property_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        PropertyType::create($request->all());

        return redirect()->route('admin.property-types.index')->with('success', 'Property Type created successfully.');
    }

    public function edit(PropertyType $propertyType)
    {
        return view('admin.property_types.edit', compact('propertyType'));
    }

    public function update(Request $request, PropertyType $propertyType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $propertyType->update($request->all());

        return redirect()->route('admin.property-types.index')->with('success', 'Property Type updated successfully.');
    }

    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();

        return redirect()->route('admin.property-types.index')->with('success', 'Property Type deleted successfully.');
    }
}
