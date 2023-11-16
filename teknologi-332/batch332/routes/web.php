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

Route::get('/test', function () {
    return "Selamat Datang di Batch 332";
});

Route::get('/apis', function () {
    $api = array("Mail"=>22, "Eka"=>21);
    return $api;
});

Route::get ('/employee', [EmployeeController::class,'index']);
Route::get ('/employee/findbyid/{id}', [EmployeeController::class,'findbyid']);
Route::get ('/employee/form', [EmployeeController::class,'form']);
Route::post ('/employee/simpan', [EmployeeController::class,'simpan']);