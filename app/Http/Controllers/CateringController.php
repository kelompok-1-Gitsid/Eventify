<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
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
        $user = User::where('role', 'vendor')
            ->whereDoesntHave('product')
            ->get();
        return view('admin.vendor.catering.product', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user' => 'required|exists:users,id,role,vendor'
        ]);

        $image1 = $request->file('image1');
        $image1Name = time() . '_1.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('images/products'), $image1Name);

        $image2 = $request->file('image2');
        $image2Name = ($image2) ? time() . '_2.' . $image2->getClientOriginalExtension() : null;
        if ($image2) {
            $image2->move(public_path('images/products'), $image2Name);
        }

        $image3 = $request->file('image3');
        $image3Name = ($image3) ? time() . '_3.' . $image3->getClientOriginalExtension() : null;
        if ($image3) {
            $image3->move(public_path('images/products'), $image3Name);
        }

        $image4 = $request->file('image4');
        $image4Name = ($image4) ? time() . '_4.' . $image4->getClientOriginalExtension() : null;
        if ($image4) {
            $image4->move(public_path('images/products'), $image4Name);
        }

        $image5 = $request->file('image5');
        $image5Name = ($image5) ? time() . '_5.' . $image5->getClientOriginalExtension() : null;
        if ($image5) {
            $image5->move(public_path('images/products'), $image5Name);
        }

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => (int) $request->input('price'),
            'image1' => 'images/products/' . basename($image1Name),
            'image2' => ($image2Name) ? 'images/products/' . basename($image2Name) : null,
            'image3' => ($image3Name) ? 'images/products/' . basename($image3Name) : null,
            'image4' => ($image4Name) ? 'images/products/' . basename($image4Name) : null,
            'image5' => ($image5Name) ? 'images/products/' . basename($image5Name) : null,
            'user_id' => $request->input('user'),
            'category' => 'Catering',
        ]);

        return redirect()->route('catering.index')->with('success', 'Product has been successfully created');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'vendor' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'description' => 'required|string',
        ]);

        $user = User::find($id);
        if (!$user) {
            return redirect()->route('catering.index')->with('error', 'User not found');
        }

        $product = Product::where('user_id', $id)->first();
        if (!$product) {
            return redirect()->route('catering.index')->with('error', 'Product not found');
        }


        $oldImage1 = $product->image1;
        $oldImage2 = $product->image2;
        $oldImage3 = $product->image3;
        $oldImage4 = $product->image4;
        $oldImage5 = $product->image5;

        if ($request->has('change_images')) {
            $request->validate([
                'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $product->image1 = $request->hasFile('image1') ? $this->uploadImage($request->file('image1')) : $product->image1;
            $product->image2 = $request->hasFile('image2') ? $this->uploadImage($request->file('image2')) : $product->image2;
            $product->image3 = $request->hasFile('image3') ? $this->uploadImage($request->file('image3')) : $product->image3;
            $product->image4 = $request->hasFile('image4') ? $this->uploadImage($request->file('image4')) : $product->image4;
            $product->image5 = $request->hasFile('image5') ? $this->uploadImage($request->file('image5')) : $product->image5;


            $this->deleteImageIfChanged($oldImage1, $product->image1);
            $this->deleteImageIfChanged($oldImage2, $product->image2);
            $this->deleteImageIfChanged($oldImage3, $product->image3);
            $this->deleteImageIfChanged($oldImage4, $product->image4);
            $this->deleteImageIfChanged($oldImage5, $product->image5);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        $product->update([
            'name' => $request->vendor,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('catering.index')->with('msg', 'Data has been successfully updated');
    }

    protected function deleteImageIfChanged($oldPath, $newPath)
    {

        if ($oldPath && $oldPath !== $newPath && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }
    }

    protected function uploadImage($file)
    {
        if ($file) {
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $imageName);
            return 'images/products/' . $imageName;
        } else {
            return null;
        }
    }

    protected function deleteImage($path)
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
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
