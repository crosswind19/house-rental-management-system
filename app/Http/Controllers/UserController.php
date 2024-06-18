<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'nullable|string|max:1000',
        ]);

        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $data['profile_picture'] = $request->file('profile_picture')->store('profile','public');

            // Store the new profile picture
            // try {
            //     $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            //     $user->profile_picture = $path;
            // } catch (\Exception $e) {
            //     Log::error('File upload error: ' . $e->getMessage());
            //     return back()->withErrors('An error occurred while uploading the profile picture. Please try again.');
            // }
           
        }

        $user->update($data);

        return redirect()->route('profile.show', $user)->with('success', 'Profile updated successfully.');
    }
}
