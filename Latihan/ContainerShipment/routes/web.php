<?php

use App\Http\Controllers\BerthController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\UserAddresController;
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
Route::get('/index', function () {
    return view('index');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/berth', [BerthController::class, 'index']);
Route::get('/berth/form', [BerthController::class, 'form']);
Route::post('/berth/create', [BerthController::class, 'create']);
Route::get('/berth/editForm/{id}', [BerthController::class, 'editform']);
Route::post('/berth/editsave/{id}', [BerthController::class, 'editsave']);
Route::get('/berth/deleteForm/{id}', [BerthController::class, 'deleteForm']);
Route::post('/berth/delete/{id}', [BerthController::class, 'delete']);

//Cargo
Route::get('/cargo', [CargoController::class, 'index']);
Route::get('/cargo/form', [CargoController::class, 'form']);
Route::post('/cargo/create', [CargoController::class, 'create']);
Route::get('/cargo/editForm/{id}', [CargoController::class, 'editform']);
Route::post('/cargo/editsave/{id}', [CargoController::class, 'editsave']);
Route::get('/cargo/deleteForm/{id}', [CargoController::class, 'deleteForm']);
Route::post('/cargo/delete/{id}', [CargoController::class, 'delete']);

Route::get('/address', [UserAddresController::class, 'index']);
Route::get('/address/form', [UserAddresController::class, 'form']);
