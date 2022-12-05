<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaCustomer;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\UserController;

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

// route utama (customer)
Route::get('/', [CustomerController::class, 'beranda'])->name('beranda');
Route::get('/about', [CustomerController::class, 'about'])->name('about');
Route::get('/contact', [CustomerController::class, 'contact'])->name('contact');

// pembelian
Route::middleware('auth')->group(function(){
    Route::get('/riwayat-pembelian', [CustomerController::class, 'history'])->name('history');
    Route::get('/cart', [CustomerController::class, 'cart'])->name('cart');
    Route::get('/beli/{stock:slug}', [BuyerController::class, 'indexBeli'])->name('showBeli');
    Route::post('/beli/{stock:slug}', [BuyerController::class, 'beli'])->name('beli');
    Route::get('/user/{user:id}', [UserController::class, 'show'])->name('showUser');
    Route::post('/logout', [AutentikasiController::class, 'logout'])->name('logout');
});

// route stock (admin)
Route::prefix('/stocks')->group(function(){
    Route::get('/', [StockController::class, 'stocks'])->name('stocks');
    Route::get('/tambah', [StockController::class, 'tambah'])->name('addStock');
    Route::post('/tambah', [StockController::class, 'store'])->name('storeStock');
    Route::get('/{stock:slug}', [StockController::class, 'show'])->name('showStock');
    Route::get('/{stock:slug}/edit', [StockController::class, 'edit'])->name('editStock');
    Route::put('/{stock:slug}/edit', [StockController::class, 'update'])->name('updateStock');
    Route::delete('/{stock:slug}', [StockController::class, 'delete'])->name('deleteStock');
});
// route pengelola customer (admin)
Route::get('/customers', KelolaCustomer::class)->name('customers');

// route login register (authentication)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AutentikasiController::class, 'register'])->name('register');
    Route::post('/register', [AutentikasiController::class, 'createRegister'])->name('crateRegister');
    Route::get('/login', [AutentikasiController::class, 'login'])->name('login');
    Route::post('/login', [AutentikasiController::class, 'createLogin'])->name('createLogin');
});
