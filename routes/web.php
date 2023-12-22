<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;

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

// tentang kami
Route::get('/tentang', function () {
    return view('tentang', [
        'title' => 'tentang kami',
        'active' => 'tentang',
        "mua" => Vendor::where('category_id', '=', '1')->count(),
        "foto" => Vendor::where('category_id', '=', '2')->count(),
        "venue" => Vendor::where('category_id', '=', '3')->count(),
        "katering" => Vendor::where('category_id', '=', '4')->count(),
        "totalVendor" => Vendor::count()
    ]);
});


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
Route::delete('/favorites/delete', [FavoriteController::class, 'destroy']);


//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/cetak', [DashboardController::class, 'cetak']);


Route::get('/dataVendor', function () {
    return view('dashboard.dataVendor');
});


// profil
Route::get('/profil/{id}', [ProfileController::class, 'show'])->middleware('auth');