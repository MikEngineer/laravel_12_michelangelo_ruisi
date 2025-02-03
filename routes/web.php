<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

//PublicController

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/products/list', [PublicController::class, 'products'])->name('products.index');
Route::post('/product/create', [PublicController::class,'storage'])->name('product.storage')->middleware('auth');

//ArticleController

Route::get('/article/create', [ArticleController::class,'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class,'store'])->name('article.store')->middleware('auth');
Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class,'show'])->name('article.show');

