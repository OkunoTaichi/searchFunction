<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    // return view('auth.login');
    // return view('welcome');
    return view('index');
});

Auth::routes();


// 一覧表示 検索機能あり--------------------------------------------------------------------
Route::get('/show', [ProductController::class, 'show'])->name('show');
Route::get('/search_product', [ProductController::class, 'search'])->name('search_product');

// 新規作成フォーム表示 --------------------------------------------------------------------
Route::get('/index', [ProductController::class, 'index'])->name('index');
// 登録
Route::post('/store', [ProductController::class, 'store'])->name('store');

// 編集・削除フォーム表示 --------------------------------------------------------------------
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
// 編集 --------------------------------------------------------------------
Route::post('/update', [ProductController::class, 'update'])->name('update');
// 削除 --------------------------------------------------------------------
Route::post('/destroy', [ProductController::class, 'destroy'])->name('destroy');




