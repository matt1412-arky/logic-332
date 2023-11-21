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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

// Routes for Category
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'getById']);
    Route::post('/', [CategoryController::class, 'simpan']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'delete']);
});

// Routes for Variant
Route::prefix('variant')->group(function () {
    Route::get('/', [VariantController::class, 'index']);
    Route::get('/{id}', [VariantController::class, 'getById']);
    Route::get('/getByCatId/{cat_id}', [VariantController::class, 'getByCatId']);
    Route::post('/', [VariantController::class, 'simpan']);
    Route::put('/{id}', [VariantController::class, 'update']);
    Route::delete('/{id}', [VariantController::class, 'delete']);
});

// Routes for Product
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'getById']);
    Route::post('/', [ProductController::class, 'simpan']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'delete']);
    // Route::get('/search/{term}', [ProductController::class, 'search']);

    // Routes to reduce and increase product stock
    Route::patch('/{id}/reduceStock/{qty}', [ProductController::class, 'reduceStock']);
    Route::patch('/{id}/increaseStock/{qty}', [ProductController::class, 'increaseStock']);
});

// Routes for Order Header
Route::prefix('orderheader')->group(function () {
    Route::get('/{id}', [OrderHeaderController::class, 'getById']);
    Route::post('/', [OrderHeaderController::class, 'simpan']);
    Route::patch('/{id}', [OrderHeaderController::class, 'updateOrderHeader']);
});

// Routes for Order Detail
Route::prefix('orderdetail')->group(function () {
    Route::get('/', [OrderDetailController::class, 'index']);
    Route::get('/{id}', [OrderDetailController::class, 'getById']);
    Route::get('/getbyheaderid/{id}', [OrderDetailController::class, 'getByHeaderId']);
    Route::post('/', [OrderDetailController::class, 'simpan']);
    Route::delete('/{id}', [OrderDetailController::class, 'delete']);
});
