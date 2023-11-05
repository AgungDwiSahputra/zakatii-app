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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/zis-list', function () {
    return view('zis-list');
})->name('zis-list');
Route::get('/infaq-sedekah-list', function () {
    return view('infaq-sedekah-list');
})->name('infaq-sedekah-list');
Route::get('/overview-maal', function () {
    return view('overview-maal');
})->name('overview-maal');
Route::get('/overview-fitrah', function () {
    return view('overview-fitrah');
})->name('overview-fitrah');
Route::get('/overview-sedekah', function () {
    return view('overview-sedekah');
})->name('overview-sedekah');
Route::get('/penggalangan-dana', function () {
    return view('penggalangan-dana');
})->name('penggalangan-dana');
Route::get('/login-zis', function () {
    return view('login-zis');
})->name('login-zis');
Route::get('/register-zis', function () {
    return view('register-zis');
})->name('register-zis');
Route::get('/kantong-donasi', function () {
    return view('kantong-donasi');
})->name('kantong-donasi');
Route::get('/payment-maal', function () {
    return view('payment-maal');
})->name('payment-maal');
Route::get('/payment-fitrah', function () {
    return view('payment-fitrah');
})->name('payment-fitrah');
Route::get('/payment-sedekah', function () {
    return view('payment-sedekah');
})->name('payment-sedekah');


Route::name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.admin-frame');
    })->name('dashboard');
});

