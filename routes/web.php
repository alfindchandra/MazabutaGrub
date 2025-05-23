<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/', [NewsController::class, 'home'])->name('welcome');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita', [NewsController::class, 'berita'])->name('components.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
