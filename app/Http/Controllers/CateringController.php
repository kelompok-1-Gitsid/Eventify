<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = 'catering';

        $user = User::whereHas('product', function ($query) use ($category) {
            $query->where('category', $category);
        })->get();

        return view('admin.vendor.catering.index', compact('user'));
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

        return view('admin.vendor.catering.edit', compact('id', 'data'));
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
    public function update(Request $request,  $id)
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

        return redirect()->route('catering.index')->with('msg', 'Category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('catering.index')->with('msg', 'Category has been successfully deleted');
    }
}
