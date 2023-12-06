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

    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){

        $SocialUser = Socialite::driver($provider)->user();

        $user = User::updateOrCreate([
            'provider_id' => $SocialUser->id,
            'provider' => $provider
        ],[
            'name' => $SocialUser->name,
            'email' => $SocialUser->email,
            'avatar' => $SocialUser->avatar,
            'role' => 'user',
            'provider_token' => $SocialUser->token,
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

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

                return view('Vendor.dashboard.dashboard', compact('user', 'products', 'totalSales', 'transactions'));
            } else {
                return redirect()->back();
            }
        }
    }

}
