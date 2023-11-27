<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function getAll()
    {
        $categories = Product::distinct()->pluck('category');
        $productsByCategory = [];

        foreach ($categories as $category) {
            $productsByCategory[$category] = Product::where('category', $category)->get();
        }

        return view('product/index', compact('productsByCategory'));
    }

    public function showDetail($id)
    {
        $product = Product::findOrFail($id);

        return view('product/detail', compact('product'));
    }
}
