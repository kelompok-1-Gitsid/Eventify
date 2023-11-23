<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.vendor.catering.index')->with([
            'catering' => Vendor::where('id_category', '1')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor, $id)
    {
        $data = $vendor->find($id);
        return view('admin.vendor.catering.edit')->with([
            'id' => $id,
            'fullname' => $data->fullname,
            'username' => $data->username,
            'address' => $data->address,
            'phone' => $data->phone,
            'email' => $data->email,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor, $id)
    {
        $vendor->find($id)->update($request->only(['fullname', 'username', 'address', 'phone', 'email']));

        return redirect()->route('catering.index')->with('msg', 'Category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor, $id)
    {
        $data = $vendor->find($id);
        $data->delete();

        return redirect()->route('catering.index')->with('msg', 'Category has been successfully deleted');
    }
}
