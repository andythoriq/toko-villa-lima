<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function tambah()
    {
        return view('stocks.add');
    }

    public function store(Request $request, Stock $stock)
    {
        $request->validate([
            'nama' => ['required', 'max:200', 'unique:stocks', 'string'],
            'stok' => ['required'],
            'gambar' => ['image']
        ]);
    }

    public function show(Stock $stock)
    {
        // $stock = Stock::where('slug', $stock)->first();
        // return view('', compact('stock'));
    }
}
