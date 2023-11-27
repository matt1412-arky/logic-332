<?php

use App\Http\Controllers\BerthController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\UserAddressController;
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

Route::redirect('/', '/auth/login');

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.'
], function () {
    Route::view('login', 'auth/auth-login')->name('login');
    Route::view('register', 'auth/register')->name('register');
});

Route::group([
    'prefix' => 'h',
    'as' => 'home.',
], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', function () {
        return view('logout');
    })->name('logout');

    Route::prefix('berth')->group(function () {
        Route::get('/', [BerthController::class, 'index'])->name('berth');
        Route::get('/form', [BerthController::class, 'form'])->name('form-berth');
        Route::post('/create', [BerthController::class, 'create'])->name('create-berth');
        Route::get('/edit/{id}', [BerthController::class, 'edit'])->name('edit-berth');
        Route::post('/update', [BerthController::class, 'update'])->name('update-berth');
        Route::get('/deleteForm/{id}', [BerthController::class, 'deleteForm'])->name('deleteForm-berth');
        Route::post('/delete', [BerthController::class, 'delete'])->name('delete-berth');
    });

    Route::prefix('cargo')->group(function () {
        Route::get('/', [CargoController::class, 'index'])->name('cargo');
        Route::get('/form', [CargoController::class, 'form'])->name('form-cargo');
        Route::post('/create', [CargoController::class, 'create'])->name('create-cargo');
        Route::get('/edit/{id}', [CargoController::class, 'edit'])->name('edit-cargo');
        Route::post('/update', [CargoController::class, 'update'])->name('update-cargo');
        Route::get('/deleteForm/{id}', [CargoController::class, 'deleteForm'])->name('deleteForm-cargo');
        Route::post('/delete', [CargoController::class, 'delete'])->name('delete-cargo');
    });

    Route::prefix('address')->group(function () {
        Route::get('/', [UserAddressController::class, 'index'])->name('address');
        Route::get('/form', [UserAddressController::class, 'form'])->name('form-address');
    });

    Route::prefix('ship')->group(function () {
        Route::get('/', [ShipController::class, 'index'])->name('ship');
        Route::get('/form', [ShipController::class, 'form'])->name('form-ship');
        Route::post('/create', [ShipController::class, 'store'])->name('create-ship');
        Route::get('/edit/{id}', [ShipController::class, 'edit'])->name('edit-ship');
        Route::post('/update', [ShipController::class, 'update'])->name('update-ship');
        Route::get('/deleteForm/{id}', [ShipController::class, 'deleteForm'])->name('deleteForm-ship');
        Route::post('/delete', [ShipController::class, 'delete'])->name('delete-ship');
        Route::get('/pdf', [ShipController::class, 'printPDF'])->name('printpdf-ship');
        Route::get('/sendemail', [ShipController::class, 'sendTextEmail'])->name('sendemail-ship');
    });
});
