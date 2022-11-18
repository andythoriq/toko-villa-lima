<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Support\Str;
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
        $validStocks = $request->validate([
            'nama' => ['required', 'max:200', 'unique:stocks,nama', 'string'],
            'persediaan' => ['required'],
            'gambar' => 'image|file|max:1000|nullable|mimes:png,jpg,jpeg,avif,webp',
            'deskripsi' => 'nullable',
        ]);

        $validStocks['slug'] = Str::slug($request->nama);

        if($request->file('gambar')){
            $validStocks['gambar'] = $request->file('image')->store('product-img');
            // $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '-' .$request->gambar->extension();
            // $request->gambar->move(public_path('image'), $imgName);
        }

        Stock::create($validStocks);
        return redirect('/');
    }
    // TODO :

    public function show(Stock $stock)
    {
        // $stock = Stock::where('slug', $stock)->first();
        // return view('', compact('stock'));
    }

    public function edit()
    {
        return;
    }

    public function update()
    {
        return;
    }
}
