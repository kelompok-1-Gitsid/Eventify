<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('profile.profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.UbahProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'vendor' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:15',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            $user->profile_image = $imageName;
        }

        $user->update($request->all());

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
