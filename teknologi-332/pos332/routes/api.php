<?php

use App\Http\Controllers\CatergoryController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderHeaderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VarianController;
use App\Models\Product;
use App\Models\Varian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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
//ini untuk yang category
Route::get('/category', [CatergoryController::class, 'index']);
Route::get('/category/{id}', [CatergoryController::class, 'getById']);
Route::post('/category', [CatergoryController::class, 'simpan']);
Route::put('/category/{id}', [CatergoryController::class, 'edit']);
Route::delete('/category/{id}', [CatergoryController::class, 'hapus']);

//ini untuk yang varian
Route::get('/varian', [VarianController::class, 'index']);
Route::get('/varian/{id}', [VarianController::class, 'getById']);
Route::get('/varian/getbycategory/{catid}', [VarianController::class, 'getByCategoryId']);
Route::post('/varian', [VarianController::class, 'simpan']);
Route::put('/varian/{id}', [VarianController::class, 'edit']);
Route::delete('/varian/{id}', [VarianController::class, 'hapus']);

// ini untuk yang product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'getById']);
Route::post('/product', [ProductController::class, 'simpan']);
Route::put('/product/{id}', [ProductController::class, 'edit']);
Route::delete('/product/{id}', [ProductController::class, 'hapus']);

//ini untuk yang order header
// Route::get('/order', [OrderController::class, 'index']);
Route::get('/orderheader/{id}', [OrderHeaderController::class, 'getById']);
Route::post('/orderheader', [OrderHeaderController::class, 'simpan']);
// Route::put('/order/{id}', [OrderController::class, 'edit']);
// Route::delete('/order/{id}', [OrderController::class, 'hapus']);

//ini untuk yang order detail
Route::get('/orderdetail', [OrderDetailController::class, 'index']);
Route::get('/orderdetail/{id}', [OrderDetailController::class, 'getById']);
Route::post('/orderdetail', [OrderDetailController::class, 'simpan']);
// Route::put('/order/{id}', [OrderController::class, 'edit']);
Route::delete('/orderdetail/{id}', [OrderDetailController::class, 'hapus']);
