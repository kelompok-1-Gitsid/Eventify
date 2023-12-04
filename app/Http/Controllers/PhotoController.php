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
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'vendor' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'description' => 'required|string',
        ]);

        // Temukan record user
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('photo.index')->with('error', 'User not found');
        }

        // Temukan record product yang terkait
        $product = Product::where('user_id', $id)->first();
        if (!$product) {
            return redirect()->route('photo.index')->with('error', 'Product not found');
        }

        // Cek apakah admin memilih untuk mengganti gambar
        if ($request->has('change_images')) {
            $request->validate([
                'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Tangani penyimpanan gambar
            $product->image1 = $request->hasFile('image1') ? $this->uploadImage($request->file('image1')) : $product->image1;
            $product->image2 = $request->hasFile('image2') ? $this->uploadImage($request->file('image2')) : $product->image2;
            $product->image3 = $request->hasFile('image3') ? $this->uploadImage($request->file('image3')) : $product->image3;
            $product->image4 = $request->hasFile('image4') ? $this->uploadImage($request->file('image4')) : $product->image4;
            $product->image5 = $request->hasFile('image5') ? $this->uploadImage($request->file('image5')) : $product->image5;
        }


        $avatar = $request->hasFile('avatar') ? $this->uploadImageAvatar($request->file('avatar')) : $request->avatar;

        // Update informasi user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'avatar' => $avatar,
        ]);

        // Update informasi product
        $product->update([
            'name' => $request->vendor,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('photo.index')->with('msg', 'Data has been successfully updated');
    }


    protected function uploadImage($file)
    {
        // Periksa apakah file ada
        if ($file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $imageName);
            return 'images/products/' . $imageName;
        } else {
            // Tangani kasus di mana tidak ada file (sesuaikan sesuai kebutuhan Anda)
            return null;
        }
    }

    protected function uploadImageAvatar($file)
    {
        // Periksa apakah file ada
        if ($file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/'), $imageName);
            return 'uploads/' . $imageName;
        } else {
            // Tangani kasus di mana tidak ada file (sesuaikan sesuai kebutuhan Anda)
            return null;
        }
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
