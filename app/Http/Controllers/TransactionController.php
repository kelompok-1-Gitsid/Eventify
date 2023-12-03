<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

            \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            // Memeriksa apakah nama terdiri dari satu kata
            if (strpos($user->name, ' ') === false) {
                // Jika hanya satu kata, gunakan itu untuk kedua first_name dan last_name
                $firstName = $user->name;
                $lastName = '';
            } else {
                // Jika lebih dari satu kata, pisahkan nama menjadi array
                $nameArray = explode(" ", $user->name);
                // Gunakan elemen pertama sebagai first_name dan elemen terakhir sebagai last_name
                $firstName = $nameArray[0];
                $lastName = end($nameArray);
            }

            $product = Product::where('id',$request->product_id)->first();

            $tanggal_awal = new DateTime($request->start_date);
            $tanggal_akhir = new DateTime($request->end_date);
            // Menghitung selisih tanggal
            $selisih = $tanggal_awal->diff($tanggal_akhir);
            // Mengambil jumlah hari dari selisih
            $daysDifference = $selisih->days+1;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $data['price'],
                ),
                'customer_details' => array(
                    'first_name' => Auth::user(),
                    'email' => Auth::user()->email,
                    'address' => Auth::user()->address,
                ),
                'item_details' => array([
                    'id'    => "($product->id).$product->name",
                    'name' => "$product->name ($daysDifference Day)",
                    'price' => $request->price,
                    'quantity' => 1
                    ]
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $data['response_midtrans'] = $snapToken;
            $data['status'] = 'pending';
            $order = Transaction::create($data);
            // Redirect to product page after successful order creation
            return redirect()->route('order.list')->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            // Handle exception
            return redirect()->back()->with('failed', 'Order created failed. Error: ' . $e->getMessage())->withInput();
        }
    }

    public function getDetail(){
        $user = auth()->user();
        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('transaction.pay', ['orders'=>$transactions]);
    }
    public function pay(Request $request){
        $token = $request->token;

        return redirect('https://app.sandbox.midtrans.com/snap/v2/vtweb/'.$token);
    }

    public function viewTransaction(Request $request){

        $data = $request->all();
        $user = $request->user();
        $product = Product::where('id',$request->product_id)->first();

        return view('transaction.transaction-success', $data);
    }
}
