<?php

namespace App\Http\Controllers;

use Illuminaate\Http\Request;

class ProfileController extends Controller
{
        public function index()
        {
            // Mendapatkan data profil vendor dari model Vendor
            $vendor = Vendor::find(auth()->user()->id);

            return view('profile.index', compact('vendor'));
        }

        public function edit()
        {
            // Mengizinkan pengguna untuk mengedit profil
            return view('profile.edit');
        }

        public function update(Request $request)
        {
            // Validasi data yang dikirimkan oleh pengguna
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                //Tambahkan validasi lain sesuai kebutuhan
            ]);

            // Memperbarui data profil vendor
            $vendor = Vendor::find(auth()->user()->id);
            $vendor->name = $request->input('name');
            $vendor->email = $request->input('email');
            //Memperbarui atribut lain jika ada

            $vendor->save();

            // Mengarahkan pengguna kembali ke halaman profil dengan pesan sukses
            return redirect()->route('profile')->with('success', 'Profil Anda berhasil diperbarui.');
        }


}
