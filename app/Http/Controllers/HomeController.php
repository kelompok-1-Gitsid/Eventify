<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\User;
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

        if (Auth::id()) {

            $role = Auth()->user()->role;

            if ($role == 'user') {
                return view('index');
            } else if ($role == 'admin') {
                return view('admin.vendor');
            } else if ($role == 'vendor') {
                return view('vendor.dashboard.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }
}
