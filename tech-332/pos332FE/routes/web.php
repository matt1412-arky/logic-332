<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantController;
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

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('category', [CategoryController::class, 'index'])->name('category');
Route::get('category/form', [CategoryController::class, 'create'])->name('form');

Route::get('variant', [VariantController::class, 'index'])->name('variant');
Route::get('variant/form', [VariantController::class, 'create'])->name('form');

Route::get('product', [ProductController::class, 'index'])->name('product');
Route::get('product/form', [ProductController::class, 'create'])->name('form');

Route::get('order', [OrderController::class, 'index'])->name('order');
Route::get('order/form', [OrderController::class, 'form'])->name('form');
