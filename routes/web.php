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
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/room', [RoomController::class, 'room'])->name('room');


// 一覧表示 検索機能あり--------------------------------------------------------------------
Route::get('/show', [ProductController::class, 'show'])->name('show');
Route::get('/search_product', [ProductController::class, 'search'])->name('search_product');

// 新規作成フォーム表示 検索機能あり--------------------------------------------------------------------
Route::get('/new_show', [ProductController::class, 'new_show'])->name('new_show');
Route::get('/new_product', [ProductController::class, 'new'])->name('new_product');

// 登録画面表示
Route::get('/room/create', [RoomController::class, 'create'])->name('create');
// 登録
Route::post('/store', [ProductController::class, 'store'])->name('store');


// 編集フォーム表示 検索機能あり    不要の可能性--------------------------------------------------------------------
Route::get('/edit_show', [ProductController::class, 'edit_show'])->name('edit_show');
Route::get('/edit_product', [ProductController::class, 'edit'])->name('edit_product');


