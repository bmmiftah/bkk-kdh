<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInformasiController;
use App\Http\Controllers\DashboardLowonganController;
use App\Http\Controllers\DashboardPerusahaanController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\RegisterController;
use App\Models\Pengurus;
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

// Route::get('/lowongan',[LowonganController::class, 'index']);

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {

    return view('about', [
        "title" => "Tentang",
        "active" => 'about',
        // "pengurus" => Pengurus::all()
    ]);
});

Route::get('/lowongan',[LowonganController::class, 'index']);
Route::get('/detail_lowongan/{lowongan:slug}',[LowonganController::class, 'show'])->middleware('auth');

// Route::get('/detail_lowongan', function () {
//     return view('detail_lowongan', [
//         "title" => "Detail Lowongan",
//         "active" => 'lowongan'
//     ]);
// });


// halaman informasi dan detail informasi
Route::get('/informasi',[InformasiController::class, 'index']);
Route::get('/detail_informasi/{informasi:slug}',[InformasiController::class, 'show']);

// Route::get('/detail_informasi', function () {
//     return view('detail_informasi', [
//         "title" => "Informasi",
//         "active" => 'informasi'
//     ]);
// });

//halaman lowongan dan detail lowongan
// Route::get('lowongan/{slug_lowongan}', function($slug_lowongan) {
//     return view('detail_lowongan');
// });


// login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');

// Dashboard Informasi
// slug
Route::get('/dashboard/informasi/checkSlug', [DashboardInformasiController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/informasi', DashboardInformasiController::class)->middleware('auth');

// Dashboard Lowongan
Route::get('/dashboard/lowongan/checkSlug', [DashboardLowonganController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/lowongan', DashboardLowonganController::class)->middleware('auth');

// Dashboard Perusahaan
Route::get('/dashboard/perusahaan/checkSlug', [DashboardPerusahaanController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/perusahaan', DashboardPerusahaanController::class)->middleware('auth');

// Dashboard Users
Route::get('/dashboard/users/checkSlug', [DashboardUsersController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/users', DashboardUsersController::class)->middleware('auth');