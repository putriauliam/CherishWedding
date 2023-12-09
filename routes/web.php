<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;

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
// Route::get('/masuk', function () {
//     return view('masuk');
// });

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// login google
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

