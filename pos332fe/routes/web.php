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
Route::get('/login', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/category/form', [App\Http\Controllers\CategoryController::class, 'form'])->name('form');
Route::get('/varian', [App\Http\Controllers\VarianController::class, 'index'])->name('varian');
Route::get('/varian/form', [App\Http\Controllers\VarianController::class, 'form'])->name('form');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/product/form', [App\Http\Controllers\ProductController::class, 'form'])->name('form');
