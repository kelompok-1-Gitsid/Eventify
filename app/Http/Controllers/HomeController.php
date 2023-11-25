<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    // Login With Google
    public function googleLogin(){

        return Socialite::driver('google')->redirect();

    }

    public function googleHandle(){

        try{
            $user=Socialite::driver('google')->user();
            $findUser=User::where('email', $user->email)->first();

            if(!$findUser){
                $findUser=new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = "12345Dummy";
                $findUser->usertype = "user";
                $findUser->save();
            }

            session()->put('id',$findUser->id);
            session()->put('type',$findUser->type);
            return redirect('/');

            // dd($user);
        }
        catch(Exception $e){
            dd($e->getMessage());
        }

    }
    public function index(){

        if(Auth::id()){

            $usertype=Auth()->user()->usertype;

            if($usertype == 'user'){
                return view('index');
            }
            else if($usertype == 'admin'){
                return view('admin.index');
            }
            else if($usertype == 'vendor'){
                return view ();
            }

            else{
                return redirect()->back();
            }

        }

    }
}
