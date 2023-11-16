<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
