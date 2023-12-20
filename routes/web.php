<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('articles', ArticleController::class);
Route::get('search', [SearchController::class, 'search'])->name('search');
