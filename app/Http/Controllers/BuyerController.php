<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function createBeli(Stock $slug)
    {
        $buy = Stock::where('slug', $slug)->get();
        return view('transaction.index', compact('buy'));
    }

    public function beli()
    {

    }
}
