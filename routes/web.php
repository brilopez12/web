<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

//Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
//Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::resource('products', '\App\Http\Controllers\ProductsController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
