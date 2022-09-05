<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Welcome;
use App\Http\Controllers\About;
use App\Http\Controllers\Products;
use App\Http\Controllers\Store;

Route::get('/', [Welcome::class,'index']);
Route::get('/pages/about', [About::class,'index'])->name('about');
Route::get('/pages/products', [Products::class,'index'])->name('products');
Route::get('/pages/store', [Store::class,'index'])->name('store');