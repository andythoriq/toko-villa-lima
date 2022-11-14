<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

// TODO!!  menggunakan bahasa indonesia -> beranda, saran, namaFields

// route halaman
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// route produk
Route::get('/products/', [ProductController::class, 'index'])->name('allProduct');
Route::get('/products/{stock:slug}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/products/create', [ProductController::class, 'create'])->name('createProduct');
Route::view('/admin', 'adminpanelcomponents.main');

// proses pembelian
Route::get('/buy/{stock:slug}', [BuyerController::class, 'createBuy'])->name('createBuy');
Route::post('/buy', [BuyerController::class, 'buy'])->name('buy');
