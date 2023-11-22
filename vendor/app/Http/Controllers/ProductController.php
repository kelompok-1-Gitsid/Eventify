<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('user')->get();
        $users = User::all();
        return view('product.MyProduct', compact('products'));
    }


    public function create()
    {
        $products = Product::all();

        return view('product.AddProduct', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        // Mengirim data product ke view edit.blade.php
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
{


    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),

    ]);

    return redirect()->route('product.index')->with('success', 'Product updated successfully.');
}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus product dari database
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function __construct()
    {
        $this->middleware('auth'); // Middleware auth akan memastikan bahwa pengguna telah terotentikasi.
    }

    public function store(Request $request)
    {
        // Periksa apakah pengguna telah terotentikasi
        if (Auth::check()) {
            $user_id = Auth::id();

            $product = new Product([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'product_image' => $request->input('product_image'),
                'user_id' => $user_id,
            ]);
            $category = Categories::where('name', $request->input('category'))->first(); // Ganti $categories menjadi $category
            if ($category) {
                $product->category_id = $category->id;
            }

            $product->save();

            return redirect()->route('product.index')->with('success', 'Product created successfully.');
        } else {
            // Pengguna belum masuk, atur tindakan yang sesuai
            return redirect()->route('login')->with('error', 'You need to login to create a product.');
        }
    }
}
