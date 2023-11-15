<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
      $title = 'Login';
      return view('auth.login', compact('title'));
    }

    public function store(Request $request){
       $credentials = $request->validate([
        "email" => ["required", "email"],
        // "username" => ["required", "username"],
        "password" => ["required"]
       ],[
        'email.required' => 'email wajib diisi',
        'password.required' => 'password wajib diisi'
       ]);

       if(Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Wrong!');

        return redirect('/login/auth');
    }

    public function logout(Request $request){
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/');
    }

    public function register(){
        $title = 'Register';
        return view('auth.register', compact('title'));
    }
}
