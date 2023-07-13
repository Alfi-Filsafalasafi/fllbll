<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
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


Route::get('/', function () {
    $product = Product::all();
    return view('beranda')->with('product',$product);
});

Route::get('/singleproduct', function () {
    return view('singleproduct');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/praktikum', function () {
    return view('praktikum');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [App\Http\Controllers\productController::class, 'index'])->name('product');
Route::post('/product/tambah', [App\Http\Controllers\productController::class, 'store'])->name('product.tambah');
Route::get('/product/{product}/edit', [App\Http\Controllers\productController::class, 'edit'])->name('product.edit');
Route::patch('/product/{product}', [App\Http\Controllers\productController::class, 'update'])->name('product.update');
Route::get('/product/{id}/hapus', [App\Http\Controllers\productController::class, 'delete'])->name('product.hapus');

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->middleware('cekstatus');