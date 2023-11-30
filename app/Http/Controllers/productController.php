<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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

    public function showDetail($name)
    {
        $product = Product::where('name', $name)->first();

        return view('product/detail', compact('product'));
    }
}
