<?php

use App\Http\Controllers\EmployeeController;
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
Route::get('/login', function () {
    return view('login');
});
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/findbyid/{id}', [EmployeeController::class, 'findbyid']);
Route::get('/employee/form', [EmployeeController::class, 'form']);
Route::post('/employee/simpan', [EmployeeController::class, 'simpan']);
Route::get('/test', function () {
    return "selamat datang di batch 332";
});
Route::get('/apis', function () {
    return "{'key1':'value1','key2':'value2'}";
});
