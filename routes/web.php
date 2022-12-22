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


// 検索機能-------------------------------------------------------------------------------
Route::get('/show', [ProductController::class, 'show'])->name('show');
Route::get('/searchproduct', [ProductController::class, 'search'])->name('searchproduct');



