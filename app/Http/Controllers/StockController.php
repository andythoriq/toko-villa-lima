<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            $validStocks['gambar'] = $request->file('gambar')->store('product-img');
            // $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '-' .$request->gambar->extension();
            // $request->gambar->move(public_path('image'), $imgName);
        }

        Stock::create($validStocks);
        return redirect(route('stocks'))->with('success', "Data telah ditambahkan. Periksa Beranda -> " . "<a href='/'>di sini</a>" );
    }
    // TODO :

    public function show(Stock $stock)
    {
        $stock = Stock::where('id', $stock->id)->orWhere('slug', $stock->slug)->firstOrFail();
        return view('stocks.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {

        function cekPerubahanNama($request, $stock){
            if ($request->nama == $stock->nama) {
                return '';
            }
            return 'unique:stocks,nama';
        }

        $validStocks = $request->validate([
            'nama' => ['required', 'max:200', cekPerubahanNama($request, $stock), 'string'],
            'persediaan' => ['required'],
            'gambar' => 'image|file|max:1000|nullable|mimes:png,jpg,jpeg,avif,webp',
            'deskripsi' => 'nullable',
        ]);


        $validStocks['slug'] = Str::slug($request->nama);

        if($request->file('gambar')){
            if($stock->gambar){
                Storage::delete($stock->gambar);
            }
            $validStocks['gambar'] = $request->file('gambar')->store('product-img');
        }
        Stock::where('id', $stock->id)->orWhere('slug', $stock->slug)->update($validStocks);
        return redirect(route('stocks'))->with('success', "Data telah diubah. Periksa Beranda -> " . "<a href='/'>di sini</a>" );
    }

    public function delete(Stock $stock)
    {
        if($stock->gambar){
            Storage::delete($stock->gambar);
        }
        Stock::destroy($stock->id);
        return redirect(route('stocks'))->with('warning', "Data telah dihapus. Periksa Beranda -> " . "<a href='/'>di sini</a>" );;
    }
}
