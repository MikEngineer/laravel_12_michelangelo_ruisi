<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/products/list', [PublicController::class, 'products'])->name('products.index');
Route::post('/product/create', [PublicController::class,'storage'])->name('product.storage');