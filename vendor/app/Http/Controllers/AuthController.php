<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    Public function register(){
        return view('auth.register');
    }

    public function profile(){
        return view('profile');
    }

    public function registerPost(Request $request){

        $user = new User();

        $user->vendor = $request->vendor;
        $user->username = $request->input('username');
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->address= $request->address;
        $user->id_role= $request->id_role;

        $user->save();

        return back()->with('success','Register Successfully');
    }
    Public function login(){
        return view('auth.login');
    }


    Public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)){
            return redirect('/')->with('success','Login berhasil');
        }

        return back()->with('error', 'Email Or Password Wrong');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

}
