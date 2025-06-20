<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::resource('product', ProductController::class);

Route::get('/', function () {
    return view(view: 'home');
});
Route::get('/product/{code}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{filname}', [ProductController::class, 'gambar'])->name('product.gambar');
Route::get('/welcome', [ProductController::class, 'welcome']);