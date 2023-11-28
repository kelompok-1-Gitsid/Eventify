<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            // 'avatar' => ['required','image','file'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required'],
        ],[
            'image.required' => 'Image must be upload',
            'image.image' => 'Must contain image',
            'image.file' => 'must contain file(jpg,png)',
        ]);

        // $image_file = $request->file('image');
        // $image_extension = $image_file->extension();
        // $name_image = date('ymdhis') . '.' . $image_extension;
        // $image_file->move(public_path('img/users/avatar'), $name_image);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'image' => $request->image,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
