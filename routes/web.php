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

// route halaman
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// route produk
Route::get('/stock/', [StockController::class, 'index'])->name('allStock');
Route::get('/stock/{stock:slug}', [StockController::class, 'show'])->name('showStock');
Route::get('/stock/add', [StockController::class, 'add'])->name('createStock');
Route::post('/stock/add', [StockController::class, 'store'])->name('storeStock');

// proses pembelian
Route::get('/beli/{stock:slug}', [BuyerController::class, 'createBeli'])->name('createBeli');
Route::post('/beli', [BuyerController::class, 'beli'])->name('beli');
