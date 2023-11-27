<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VendorController extends Controller
{ public function showDashboard()
    {

        return view('Vendor.dashboard.dashboard');

    }

    public function profile()
    {

        return view('vendor.profile.profile');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('vendor.profile.UbahProfile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            $user->profile_image = $imageName;
        }

        $user->update($request->all());

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }


    public function orders(){
        return view('vendor.transactions.index');
    }

}
