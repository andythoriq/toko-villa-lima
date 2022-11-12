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

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/saran', [PageController::class, 'saran'])->name('saran');

Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('product');

Route::get('/buy', [BuyerController::class, 'showBuy'])->name('showBuy');
Route::get('/post', [BuyerController::class, 'buy'])->name('buy');
