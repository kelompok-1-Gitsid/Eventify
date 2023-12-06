<?php

namespace App\Http\Controllers;

use App\Exports\TransactionExport;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');


        $query = Transaction::query();

        if ($keyword) {
            $query->whereHas('user', function ($subQuery) use ($keyword) {
                $subQuery->where('name', $keyword)
                    ->orWhere('status', $keyword);
            });
        }

        $transaction = $query->get();

        return view('admin.transaction', compact('transaction'));
    }

    public function cetakPdf()
    {
        $transaction = Transaction::all();

        return view('admin.report', compact('transaction'));
    }
    public function cetakExcel()
    {
        return Excel::download(new TransactionExport, 'transaction.xlsx');

        // return view('admin.excel', compact('transaction'));
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
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
