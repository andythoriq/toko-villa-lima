<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

use function PHPSTORM_META\type;

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
        $validStock = $request->validate([
            'jumlah' => ['required', 'numeric', 'min:1'],
        ]);
        $validStock['stock_id'] = $stock->id;
        $validStock['user_id'] = Auth::user()->getAuthIdentifier();
        Product::create($validStock);
        return redirect(route('beranda'));
    }
}