<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Booking;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    private function getLayout()
    {
        $user = auth()->user();

        if ($user->roles == 1) {
            return 'admin.layouts.app';
        } elseif ($user->roles == 2) {
            return 'agent.layouts.app';
        } else {
            return 'layouts.app';
        }
    }
    
    public function index()
    {

        $user = auth()->user();

        if ($user->roles == 1) {
            // Admin: Display all properties
            $properties = Property::all();
        } else {
            // Agent and User: Display properties based on the user's ID
            $properties = Property::where('user_id', $user->id)->get();
        }

        $layout = $this->getLayout();
        $propertyTypes = PropertyType::all();
        $states = State::all();
        return view('properties.dashboard', compact('properties', 'user', 'layout', 'propertyTypes', 'states'));
    }

    public function properties(Request $request)
    {
        // $user = auth()->user();
        $query = Property::query();

        if ($request->filled('property_type_id')) {
            $query->where('property_type_id', $request->property_type_id);
        }

        if ($request->filled('state_id')) {
            $query->where('state_id', $request->state_id);
        }

        $properties = $query->get();
        $propertyTypes = PropertyType::all();
        $states = State::all();

        return view('properties', compact('properties', 'propertyTypes', 'states'));
    }

    public function property($id)
    {
        $property = Property::findOrFail($id);
        $user = $property->user;
        return view('property', compact('property','user'));
    }

    public function create()
    {
        $layout = $this->getLayout();
        $propertyTypes = PropertyType::all();
        $states = State::all();
        return view('properties.create', compact('layout','propertyTypes', 'states'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_type_id' => 'required|exists:property_types,id',
            'description' => 'required',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
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

    property::create($data);

    return to_route('properties.index', $data)->with('message',"Property was created");
    }

    public function show(Property $property)
    {
        $layout = $this->getLayout();
        return view('properties.show', compact('property', 'layout'));
    }

    public function edit(Property $property)
    {
        $layout = $this->getLayout();
        return view('properties.edit', compact('property', 'layout'));
    }

    public function update(Request $request, Property $property)
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
    
        // Check if new photos were uploaded
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
            // If new photos are uploaded, update the photo paths
            $data['photo'] = json_encode($photoPaths);
        } else {
            // If no new photos, retain the existing photos
            $data['photo'] = $property->photo;
        }
    
        // Update the property record
        $property->update($data);
    
        return redirect()->route('properties.index')->with('message', "Property was updated successfully");
    }

    public function destroy(Property $property)
    {
        try {
            // Delete the property
            $property->delete();
            
            // Optionally, delete the associated photos from storage
            if ($property->photo) {
                foreach (json_decode($property->photo) as $photo) {
                    Storage::delete($photo);
                }
            }
            
            return redirect()->route('properties.index')->with('message', 'Property deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting property: ' . $e->getMessage());
            return redirect()->route('properties.index')->withErrors('An error occurred while deleting the property. Please try again.');
        }
    }

    public function showRandomProperties()
    {
        $properties = Property::inRandomOrder()->take(3)->get();
        return view('home', compact('properties'));
    }

}
