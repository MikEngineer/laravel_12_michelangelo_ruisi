<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

//PublicController

Route::get('/', [PublicController::class, 'homepage'])->name('home');

//ArticleController

Route::get('/article/create', [ArticleController::class,'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class,'store'])->name('article.store')->middleware('auth');

Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class,'show'])->name('article.show');

Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');

Route::delete('/article/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');