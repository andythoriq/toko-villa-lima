<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TODO!!  menggunakan bahasa indonesia -> beranda, saran, namaFields, beli

// route halaman customer
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// route stock
Route::prefix('/stock')->group(function (){
    Route::get('/', [PageController::class, 'stock'])->name('allStock');
    Route::get('/{stock:slug}', [StockController::class, 'show'])->name('showStock');
    Route::get('/tambah', [StockController::class, 'create'])->name('addStock');
    Route::post('/tambah', [StockController::class, 'store'])->name('storeStock');
    Route::get('/edit/{stock:slug}', [StockController::class, 'edit'])->name('editStock');
    Route::put('/edit/{stock:slug}', [StockController::class, 'update'])->name('updateStock');
    Route::delete('/delete/{stock:slug}', [Stock::class, 'destroy'])->name('deleteStock');
});

// route customer

// proses pembelian
Route::get('/beli/{stock:slug}', [BuyerController::class, 'createBeli'])->name('createBeli');
Route::post('/beli', [BuyerController::class, 'beli'])->name('beli');

//Route::middleware()->group(function () {
    // TODO : route stock taro sini
//});
