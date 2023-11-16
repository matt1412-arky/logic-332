<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// bagian category
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
Route::get('/category/form', [App\Http\Controllers\CategoryController::class, 'form'])->name('form');

// bagian varian
Route::get('/varian', [App\Http\Controllers\VarianController::class, 'index'])->name('index');
Route::get('/varian/form', [App\Http\Controllers\VarianController::class, 'form'])->name('form');

// bagian varian
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/product/form', [App\Http\Controllers\ProductController::class, 'form'])->name('form');

// bagian order
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('index');
Route::get('/order/form', [App\Http\Controllers\OrderController::class, 'form'])->name('form');