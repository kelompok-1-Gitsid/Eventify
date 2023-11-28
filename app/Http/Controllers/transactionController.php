<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class transactionController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'price'     => 'required'
        ]);
    
        // Check for validation errors

        // if ($validator->fails()) {
        //     dd($request->all());
        // }
    
        try {
            $data = $request->all();
            $user = $request->user();
            $data['user_id'] = $user->id;
    
            // Create a new Order instance
            // dd($data);
            $order = Transaction::create($data);
    
            // Redirect to product page after successful order creation
            return redirect()->route('product.detail', ['id' => $request->productName])->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            // Handle exception
            return redirect()->back()->with('failed', 'Order created failed. Error: ' . $e->getMessage())->withInput();
        }
    }
    
}
