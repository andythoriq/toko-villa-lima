<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function stocks()
    {
        $stocks = Stock::all();
        if(!$stocks){
            return view('stocks.index')->with('info', 'Produk tidak ditemukan!');
        }else{
            return view('stocks.index', compact('stocks'));
        }
    }

    public function tambah()
    {
        return view('stocks.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'max:200', 'unique:stocks', 'string'],
            'persediaan' => ['required'],
            'gambar' => 'image|file|max:1000',
            ''
        ]);
    }
    // TODO :

    public function show(Stock $stock)
    {
        // $stock = Stock::where('slug', $stock)->first();
        // return view('', compact('stock'));
    }
}
