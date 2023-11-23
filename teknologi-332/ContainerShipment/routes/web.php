<?php

use App\Http\Controllers\BerthController;
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
