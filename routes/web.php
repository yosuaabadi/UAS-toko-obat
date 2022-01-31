<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::redirect('/','/welcome',301);
Route::get('/produk', [App\Http\Controllers\ProdukController::class,"tampilproduk"]);
Route::post('/create', [App\Http\Controllers\ProdukController::class,"create"]);
Route::get('/delete/{id}',[App\Http\Controllers\ProdukController::class,"delete"]);
Route::get('/edit/{id}',[App\Http\Controllers\ProdukController::class,"edit"]);
Route::post('/update/{id}',[App\Http\Controllers\ProdukController::class,"update"]);
Route::get('/action/{id}',[App\Http\Controllers\ProdukController::class,"action"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
