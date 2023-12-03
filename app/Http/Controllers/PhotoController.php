<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = 'photographer';

        $user = User::whereHas('product', function ($query) use ($category) {
            $query->where('category', $category);
        })->get();

        return view('admin.vendor.photographer.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = User::findOrFail($id);

        return view('admin.vendor.photographer.edit', compact('id', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the user record
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('photo.index')->with('error', 'User not found');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        // Find the related product record
        $product = Product::where('user_id', $id)->first();
        if (!$product) {
            return redirect()->route('photo.index')->with('error', 'Product not found');
        }

        $product->update([
            'name' => $request->vendor,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('photo.index')->with('msg', 'Data has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $product = Product::where('user_id', $id)->first();

        if ($user && $product) {
            $user->delete();
            $product->delete();

            return redirect()->route('photo.index')->with('msg', 'Data has been successfully deleted');
        } else {
            return redirect()->route('photo.index')->with('msg', 'Data has been unsuccessfully deleted');
        }

    }
}
