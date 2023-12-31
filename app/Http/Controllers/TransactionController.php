<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required'
        ]);

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

            $product = Product::where('id', $request->product_id)->first();

            $tanggal_awal = new DateTime($request->start_date);
            $tanggal_akhir = new DateTime($request->end_date);
            // Menghitung selisih tanggal
            $selisih = $tanggal_awal->diff($tanggal_akhir);
            // Mengambil jumlah hari dari selisih
            $daysDifference = $selisih->days + 1;

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
                'item_details' => array(
                    [
                        'id' => "($product->id).$product->name",
                        'name' => "$product->name ($daysDifference Day)",
                        'price' => $request->price,
                        'quantity' => 1
                    ]
                ),
                'callbacks' => array(
                    'finish' => 'http://127.0.0.1:8000/api/callback',
                ),
            );


            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $data['response_midtrans'] = $snapToken;
            $data['status'] = 'pending';
            $data['order_id'] = $params['transaction_details']['order_id'];

            // $order = new Transaction;

            $order = Transaction::create($data);
            // Redirect to product page after successful order creation
            return redirect()->route('order.list')->with('success', 'Order created successfully');
        } catch (\Exception $e) {
            // Handle exception
            return redirect()->back()->with('failed', 'Order created failed. Error: ' . $e->getMessage())->withInput();
        }
    }

    public function getDetail()
    {
        $user = auth()->user();
        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('user.transaction.pay', ['orders' => $transactions]);
    }

    public function pay(Request $request)
    {
        $token = $request->token;

        return redirect('https://app.sandbox.midtrans.com/snap/v2/vtweb/' . $token);
    }

    public function viewTransaction(Request $request)
    {

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->get("https://api.sandbox.midtrans.com/v2/{$request->order_id}/status");

        $response = json_decode($response->body());

        $transaction = Transaction::where('order_id', $response->order_id)->first();

        if ($response->transaction_status === 'capture') {
            $transaction->status = 'capture';
        } else if ($response->transaction_status === 'settlement') {
            $transaction->status = 'settlement';
        } else if ($response->transaction_status === 'pending') {
            $transaction->status = 'pending';
        }

        $transaction->save();

        return redirect('/');
    }
}
