<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth','admin'])->name('dashboard');
});


require __DIR__ . '/auth.php';
