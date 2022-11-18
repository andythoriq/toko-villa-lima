<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function showBeli(Stock $stock)
    {
        // $buy = Stock::where('slug', $post)->get();
        $activate = 'beli';
        return view('beli.index', compact('stock', 'activate'));
    }

    public function beli()
    {

    }
}
