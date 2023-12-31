<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function showDashboard()
    {
        $user = Auth::user();
        $product = $user->product;

        if ($product) {
            $products = collect([$product]);
            $productIds = [$product->id];
            $totalSales = Transaction::whereIn('product_id', $productIds)->sum('price');
            $transactions = $user->transactions;
        } else {
            $products = collect();
            $totalSales = 0;
            $transactions = collect();
        }

        return view('Vendor.dashboard.dashboard', compact('user', 'products', 'totalSales', 'transactions'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('Vendor.profile.profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('Vendor.profile.UbahProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|string|max:255',
        ]);

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $user->avatar = 'uploads/' . $imageName;
            $user->save();
        }

        $user->update($request->except('avatar'));

        return redirect()->route('Vendor.profile')->with('success', 'Profil berhasil diperbarui!');
    }

    public function showProducts()
    {
        $user = Auth::user();
        $product = $user->product;

        if ($product) {
            return view('Vendor.product.MyProduct', compact('product'));
        } else {
            return redirect()->route('product.create')->with('warning', 'You already have a product.');
        }
    }

    public function create()
    {
        $user = Auth::user();
        $product = $user->product;

        if ($product) {
            return redirect()->route('vendor.product')->with('warning', 'You already have a product.');
        }

        return view('Vendor.product.AddProduct', compact('user'));
    }

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
            'category' => 'required|in:Catering,Videographer,Photographer,Decoration,Makeup Artist',
        ]);

        $user = Auth::user();
        $product = $user->product;

        if ($product) {
            return redirect()->route('vendor.product')->with('warning', 'You already have a product.');
        }

        $image1 = $request->file('image1');
        $image1Name = $image1->getClientOriginalName();
        $image1->move(public_path('images/products'), $image1Name);

        $image2 = $request->file('image2');
        $image2Name = ($image2) ? $image2->getClientOriginalName() : null;
        if ($image2) {
            $image2->move(public_path('images/products'), $image2Name);
        }

        $image3 = $request->file('image3');
        $image3Name = ($image3) ? $image3->getClientOriginalName() : null;
        if ($image3) {
            $image3->move(public_path('images/products'), $image3Name);
        }

        $image4 = $request->file('image4');
        $image4Name = ($image4) ? $image4->getClientOriginalName() : null;
        if ($image4) {
            $image4->move(public_path('images/products'), $image4Name);
        }

        $image5 = $request->file('image5');
        $image5Name = ($image5) ? $image5->getClientOriginalName() : null;
        if ($image5) {
            $image5->move(public_path('images/products'), $image5Name);
        }


        $product = $user->product()->create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => (int) $request->input('price'),
            'image1' => 'images/products/' . $image1Name,
            'image2' => ($image2Name) ? 'images/products/' . $image2Name : null,
            'image3' => ($image3Name) ? 'images/products/' . $image3Name : null,
            'image4' => ($image4Name) ? 'images/products/' . $image4Name : null,
            'image5' => ($image5Name) ? 'images/products/' . $image5Name : null,
            'category' => $request->input('category'),

        ]);

        return redirect()->route('vendor.product')->with('success', 'Product created successfully.');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $user = Auth::user();
        return view('Vendor.product.edit', compact('product', 'user'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'category' => 'required|in:Catering,Videographer,Photographer,Decoration,Makeup Artist',
        ]);

        $product = Product::findOrFail($id);

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
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->save();

        $this->deleteImage($oldImage1);
        $this->deleteImage($oldImage2);
        $this->deleteImage($oldImage3);
        $this->deleteImage($oldImage4);
        $this->deleteImage($oldImage5);

        return redirect()->route('vendor.product')->with('success', 'Product updated successfully.');
    }

    protected function uploadImage($file)
    {
        $imageName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/products'), $imageName);
        return 'images/products/' . $imageName;
    }

    protected function deleteImage($path)
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);


        $this->deleteImages($product);


        $product->delete();

        return redirect()->route('vendor.product')->with('success', 'Product deleted successfully.');
    }

    private function deleteImages(Product $product)
    {

        foreach (range(1, 5) as $index) {
            $imageField = "image{$index}";


            if ($product->$imageField) {
                $imagePath = public_path($product->$imageField);


                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }
    }



    public function destroyProduct($id)
    {
        $product = Product::findOrFail($id);


        $product->transactions()->delete();

        Storage::disk('public')->delete([
            $product->image1,
            $product->image2,
            $product->image3,
            $product->image4,
            $product->image5,
        ]);


        $product->delete();

        return redirect()->route('vendor.product')->with('success', 'Product deleted successfully.');
    }

    public function transactions()
    {
        $user = Auth::user();
        $product = $user->product;

        if (!$product) {
            return redirect()->route('product.create')->with('warning', 'You need to create a product first.');
        }

        $transactions = Transaction::where('product_id', $product->id)->get();

        return view('Vendor.transactions.index', compact('transactions', 'user'));
    }
}
