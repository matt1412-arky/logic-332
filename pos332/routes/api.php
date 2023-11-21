<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderHeaderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VarianController;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'getById']);
Route::post('/category', [CategoryController::class, 'simpan']);
Route::put('/category/{id}', [CategoryController::class, 'edit']);
Route::delete('/category/{id}', [CategoryController::class, 'hapus']);

Route::get('/varian', [VarianController::class, 'index']);
Route::get('/varian/{id}', [VarianController::class, 'getById']);
Route::get('/varian/getbycategory/{cat_id}', [VarianController::class, 'getByCategoryId']);
Route::post('/varian', [VarianController::class, 'simpan']);
Route::put('/varian/{id}', [VarianController::class, 'edit']);
Route::delete('/varian/{id}', [VarianController::class, 'hapus']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'getById']);
Route::post('/product', [ProductController::class, 'simpan']);
Route::put('/product/{id}', [ProductController::class, 'edit']);
Route::delete('/product/{id}', [ProductController::class, 'hapus']);
Route::get('/product/reduceStock/{id}/{number}', [ProductController::class, 'reduceStock']);
Route::get('/product/increasesStock/{id}/{number}', [ProductController::class, 'increasesStock']);
Route::get('/product/search/{textSearch}', [ProductController::class, 'search']);

Route::get('/orderheader', [OrderHeaderController::class, 'index']);
Route::get('/orderheader/{id}', [OrderHeaderController::class, 'getById']);
Route::post('/orderheader', [OrderHeaderController::class, 'simpan']);
Route::delete('/orderheader/{id}', [OrderHeaderController::class, 'hapus']);
Route::put('/orderheader/{id}', [OrderHeaderController::class, 'edit']);

Route::get('/orderdetail', [OrderDetailController::class, 'index']);
Route::get('/orderdetail/{id}', [OrderDetailController::class, 'getById']);
Route::post('/orderdetail', [OrderDetailController::class, 'simpan']);
Route::delete('/orderdetail/{id}', [OrderDetailController::class, 'hapus']);
Route::get('/orderdetail/getByHeaderId/{hid}', [OrderDetailController::class, 'getByHeaderId']);
