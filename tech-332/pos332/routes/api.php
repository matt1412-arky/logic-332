<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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
Route::post('/category', [CategoryController::class, 'simpan']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'delete']);

Route::get('/variant', [VariantController::class, 'index']);
Route::post('/variant', [VariantController::class, 'simpan']);
Route::put('/variant/{id}', [VariantController::class, 'update']);
Route::delete('/variant/{id}', [VariantController::class, 'delete']);
