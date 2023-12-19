<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;

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
    return view('beranda', [
        'categories' => Category::all()
    ]);
});

Route::get('/tentang', function () {
    return view('tentang', [
        'title' => 'Tentang Kami',
        'active' => 'tentang'
    ]);
});
// Route::get('/detailVendor', function () {
//     return view('detailVendor');
// });
// Route::get('/detailVendor', function () {
//     return view('detailVendor', [
//         'title' => 'Detail Vendor',
//         'active' => 'detailVendor'
//     ]);
// });
// Route::get('/daftar', function () {
//     return view('daftar');
// });
// Route::get('/masuk', function () {
//     return view('masuk');
// });


// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// REGISTER
Route::get('/daftar', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/daftar', [RegisterController::class, 'store']);

// login google
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

// vendor
Route::get('/vendor', [VendorController::class, 'index']);
Route::get('detail/{vendor:slug}', [VendorController::class, 'show']);
Route::get('/', [VendorController::class, 'rekomendasi']);
Route::get('maps/{vendor:slug}', [VendorController::class, 'maps']);


// favorite
Route::post('/favorites/add', [FavoriteController::class, 'store'])->middleware('auth');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index'); 
});