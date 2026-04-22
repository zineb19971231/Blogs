<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
| Web Routes
*/

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');