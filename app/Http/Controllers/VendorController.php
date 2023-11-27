<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VendorController extends Controller
{ public function showDashboard()
    {
        $user = Auth::user();
        return view('Vendor.dashboard.dashboard', compact('user'));

    }

// Di dalam VendorController
    public function profile()
    {
        $user = Auth::user();
        return view('vendor.profile.profile', compact('user'));
    }


    public function edit()
    {
        $user = Auth::user();
        return view('vendor.profile.UbahProfile', compact('user'));
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

            // Simpan nama file yang benar ke kolom 'avatar' di database
            $user->avatar = $imageName;
            $user->save();
        }

        // Sekarang perbarui data pengguna yang lain
        $user->update($request->except('avatar'));

        return redirect()->route('vendor.profile')->with('success', 'Profil berhasil diperbarui!');
    }



    public function orders(){
        return view('vendor.transactions.index');
    }

}
