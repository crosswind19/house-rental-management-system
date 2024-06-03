<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->roles == 1) {
            // Admin: Display all properties
            $properties = Property::all();
            return view('properties.dashboard', compact('properties'));
        } elseif ($user->roles == 2) {
            // User: Display properties based on the user's ID
            $properties = Property::where('user_id', $user->id)->get();
            return view('properties.dashboard', compact('properties'));
        } elseif ($user->roles == 3) {
            // User: Display properties based on the user's ID
            $properties = Property::where('user_id', $user->id)->get();
            return view('properties.dashboard', compact('properties'));
        } else {
            // Optional: Handle other roles or unauthorized access
            abort(403, 'Unauthorized action.');
        }
        // $properties = Property::all();
        // return view('properties.dashboard', compact('properties'));
    }

    public function properties()
    {
        // $user = auth()->user();
        $properties = Property::all();
            return view('properties', compact('properties'));
    }

    public function property($id)
    {
        $property = Property::findOrFail($id);
        return view('property', compact('property'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'description' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zipcode' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'photo' => 'nullable',
            'photo.*' => 'image|mimes:jpeg,png,jpg,webp',
            'bedroom' => 'required|integer',
            'bathroom' => 'required|integer',
            'car_park' => 'required|integer|min:0|max:10',
            'build_up_area' => ['required', 'integer'],
            'furnishing' => 'required|string|max:255'
        ]);
        $data['user_id'] = $request->user()->id;
        $photoPaths = [];

        // Check if photos were uploaded
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {
                try {
                    $path = $file->store('public/images');
                    $photoPaths[] = $path;
                } catch (\Exception $e) {
                    Log::error('File upload error: ' . $e->getMessage());
                    return back()->withErrors('An error occurred while uploading one of the photos. Please try again.');
                }
            }
            // Assuming you want to store multiple photo paths as a JSON array
            $data['photo'] = json_encode($photoPaths);
        }
    //dd($data);

    property::create($data);

    return to_route('properties.index', $data)->with('message',"Menu was created");
    }

    public function show(Property $property)
    {
        return view('properties.show', compact('property'));
    }

    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'property_name' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'build_up_area' => 'required|numeric',
            'address' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'nullable|image',
            'bedroom' => 'required|integer',
            'bathroom' => 'required|integer',
            'car_park' => 'required|boolean',
            'description' => 'required',
            'land_area' => 'required|numeric',
            'furnishing' => 'required|string|max:255',
            'occupancy' => 'required|boolean',
            'availability' => 'required|boolean',
        ]);

        $property->fill($request->all());

        if ($request->hasFile('photo')) {
            $property->photo = $request->file('photo')->store('photos');
        }

        $property->save();

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('properties.index')->with('success', 'Property deleted successfully.');
    }
}
