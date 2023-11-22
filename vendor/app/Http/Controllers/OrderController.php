<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

    public function index()
{
    $user = Auth::user();
    $orders = Order::where('user_id', auth()->id())->get();
    return view('orders.index', compact('user', 'orders'));
}


    public function create()
{

    $products = Product::where('vendor_id', auth()->user()->vendor_id)->get();
    return view('orders.create', compact('products'));
}

    public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    $product = Product::find($request->product_id);
    $order = Order::create([
        'user_id' => auth()->id(),
        'vendor_id' => $product->vendor_id,
        'status' => 'pending',
    ]);

    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $product->id,
        'quantity' => $request->quantity,
        'price' => $product->price,
    ]);


}
}
