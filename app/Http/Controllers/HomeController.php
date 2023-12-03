<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\User;
use App\Models\Transaction;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    // Login With Google
    public function googleLogin()
    {

        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {

        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = "";
                $findUser->role = "user";
                $findUser->save();
            }

            session()->put('id', $findUser->id);
            session()->put('type', $findUser->type);
            return redirect(RouteServiceProvider::HOME);

            // dd($user);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user();
            $role = $user->role;

            if ($role == 'user') {
                return view('index');
            } else if ($role == 'admin') {
                return view('admin.vendor');
            } else if ($role == 'vendor') {
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

                return view('vendor.dashboard.dashboard', compact('user', 'products', 'totalSales', 'transactions'));
            } else {
                return redirect()->back();
            }
        }
    }

}
