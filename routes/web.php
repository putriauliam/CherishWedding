<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});
Route::get('/vendor', function () {
    return view('vendor');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/masuk', function () {
    return view('masuk');
});

