<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return view('dashboard', compact('vendors'));
    }
    public function profile()
    {
        $vendors = Vendor::all();
        return view('profile', compact('vendors'));
    }

    public function orders()
    {
        $vendors = Vendor::all();
        return view('orders', compact('vendors'));
    }
    public function AddProduct()
    {
        $vendors = Vendor::all();
        return view('AddProduct', compact('vendors'));
    }
    public function MyProduct()
    {
        $vendors = Vendor::all();
        return view('MyProduct', compact('vendors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        Vendor::create($data);

        return redirect()->route('vendor.profile')->with('success', 'Vendor berhasil ditambahkan');
    }

    public function edit(Vendor $vendor)
    {
        return view('dashboard.vendor.edit', compact('vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        $vendor->update($data);

        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil diperbarui');
    }

    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil dihapus');
    }
}
