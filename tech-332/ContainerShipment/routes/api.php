<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LogoutRestController;
use App\Http\Controllers\MenuRestController;
use App\Http\Controllers\RoleRestController;
use App\Http\Controllers\UserAddressRestController;
use App\Http\Controllers\UserRestController;
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
Route::get('/role', [RoleRestController::class, 'getAll']);

Route::post('/user', [UserRestController::class, 'simpan']);
Route::post('/login', [UserRestController::class, 'login']);

Route::get('/parentmenu', [MenuRestController::class, 'parentMenu']);
Route::get('/childmenu/{parent_id}', [MenuRestController::class, 'childMenu']);

Route::post('/useraddress/create/{user_id}', [UserAddressRestController::class, 'create']);
