<?php

use App\Http\Controllers\MenuRestController;
use App\Http\Controllers\RoleRestController;
use App\Http\Controllers\UserAddressRestController;
use App\Http\Controllers\UserRestController;
use App\Models\Role;
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

// untuk bagian role
Route::get('/role', [RoleRestController::class, 'getAll']);

// untuk bagian user
Route::post('/user', [UserRestController::class, 'simpan']);
Route::post('/create', [UserRestController::class, 'create']);
Route::post('/login', [UserRestController::class, 'login']);
Route::post('/logout', [UserRestController::class, 'logout']);

// untuk bagian menu
Route::get('/parentmenu',[MenuRestController::class, 'parentMenu']);
Route::get('/childmenu/{parent_id}', [MenuRestController::class, 'childMenu']);

// untuk bagian user address
Route::post('/useraddress/create/{user_id}', [UserAddressRestController::class, 'create']);
