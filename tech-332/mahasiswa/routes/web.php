<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\mahasiswa;
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

Route::get('mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('mahasiswa/findbyid/{id}', [MahasiswaController::class, 'findById'])->name('findbyid');
Route::get('mahasiswa/form', [MahasiswaController::class, 'tambahData'])->name('form');
Route::post('mahasiswa/simpan', [MahasiswaController::class, 'simpan'])->name('simpan');
