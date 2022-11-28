<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Product;

class BuyerController extends Controller
{
    public function indexBeli(Stock $stock)
    {
        // $buy = Stock::where('slug', $post)->get();
        $activate = 'beli';
        return view('beli.index', compact('stock', 'activate'));
    }

    public function beli(Request $request, Stock $stock)
    {
        $validStocks = $request->validate([
            'nama' => ['required', 'max:200'],
            'jumlah' => ['required', 'numeric', 'min:1']
        ]);
        $validStocks['slug'] = $request->slug;
        Product::create($validStocks);
        return redirect(route('beranda'));
    }
}
