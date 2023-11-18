<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderHeaderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VariantController;

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
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'delete']);

Route::get('/variant', [VariantController::class, 'index']);
Route::get('/variant/{id}', [VariantController::class, 'getById']);
Route::get('/variant/getByCatId/{cat_id}', [VariantController::class, 'getByCatId']);
Route::post('/variant', [VariantController::class, 'simpan']);
Route::put('/variant/{id}', [VariantController::class, 'update']);
Route::delete('/variant/{id}', [VariantController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'getById']);
Route::post('/product', [ProductController::class, 'simpan']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);

Route::get('/orderheader/{id}', [OrderHeaderController::class, 'getById']);
Route::post('/orderheader', [OrderHeaderController::class, 'simpan']);

Route::get('/orderdetail', [OrderDetailController::class, 'index']);
Route::get('/orderdetail/{id}', [OrderDetailController::class, 'getById']);
Route::post('/orderdetail', [OrderDetailController::class, 'simpan']);
Route::delete('/orderdetail/{id}', [OrderDetailController::class, 'delete']);
