<?php

use App\Http\Controllers\BerthController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ShipController;
use App\Models\Cargo;
use App\Models\Ship;
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

// untuk bagian login
Route::get('/', function () {
    return view('welcome');
});
// untuk bagian awal masuk setelah login
Route::get('/index', function () {
    return view('index');
});
// untuk bagian logout
Route::get('/logout', function () {
    return view('logout');
});

// untuk bagian berth
Route::get('/berth', [BerthController::class, 'index']);
Route::get('/berth/form', [BerthController::class, 'form']);
Route::post('/berth/create', [BerthController::class, 'create']);
Route::get('/berth/editForm/{id}', [BerthController::class, 'editForm']);
Route::post('/berth/editSave/{id}', [BerthController::class, 'editSave']);
Route::get('/berth/deleteform/{id}', [BerthController::class, 'deleteForm']);
Route::post('/berth/delete', [BerthController::class, 'delete']);

// untuk bagian user
Route::get('/address', [UserAddressController::class, 'index']);
Route::get('/address/form', [UserAddressController::class, 'form']);

// untuk bagian cargo
Route::get('/cargo', [CargoController::class, 'index']);
Route::get('/cargo/form', [CargoController::class, 'form']);
Route::post('/cargo/create', [CargoController::class, 'create']);
Route::get('/cargo/editForm/{id}', [CargoController::class, 'editForm']);
Route::post('/cargo/editSave/{id}', [CargoController::class, 'editSave']);
Route::get('/cargo/deleteform/{id}', [CargoController::class, 'deleteForm']);
Route::post('/cargo/delete', [CargoController::class, 'delete']);

// untuk bagian ship
Route::get('/ship', [ShipController::class, 'index']);
Route::get('/ship/form', [ShipController::class, 'form']);
Route::post('/ship/create', [ShipController::class, 'store']);
Route::get('/ship/pdf', [ShipController::class, 'printPDF']);
Route::get('/ship/sendemail', [ShipController::class, 'sendTextEmail']);
