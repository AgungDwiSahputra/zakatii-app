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
Route::get('/overview-zis', function () {
    return view('overview-zis');
})->name('overview');
Route::get('/penggalangan-dana', function () {
    return view('penggalangan-dana');
})->name('penggalangan-dana');
Route::get('/login-zis', function () {
    return view('login-zis');
})->name('login-zis');
Route::get('/register-zis', function () {
    return view('register-zis');
})->name('register-zis');

