<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

/*
| Web Routes
*/

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[ArticleController::class,'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
});



Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

?>