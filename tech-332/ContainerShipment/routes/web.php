<?php

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
});
