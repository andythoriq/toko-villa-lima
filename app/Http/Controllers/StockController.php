<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('stock.index');
    }

    public function add()
    {
        return view('stock.add');
    }

    public function store(Stock $stock)
    {

    }

    public function show(Stock $stock)
    {
        // $stock = Stock::where('slug', $stock)->first();
        // return view('', compact('stock'));
    }
}
