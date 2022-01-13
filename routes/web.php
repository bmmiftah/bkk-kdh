<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardCarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInformasiController;
use App\Http\Controllers\DashboardLowonganController;
use App\Http\Controllers\DashboardPendaftaranController;
use App\Http\Controllers\DashboardPengurusController;
use App\Http\Controllers\DashboardPerusahaanController;
use App\Http\Controllers\DashboardProfilController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\DataVaksinControler;
use App\Http\Controllers\DataVaksinController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatusController;
use App\Models\Pengurus;
use Illuminate\Support\Facades\Auth;
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


// verifikasi email user
// Auth::routes(['verify' => true]);


// Route::get('/lowongan',[LowonganController::class, 'index']);

Route::get('/', function () {
    return view('home', [
        "title" => "Beranda",
        "active" => 'home'
    ]);
});

// about
Route::get('/tentang', [AboutController::class, 'index']);

// lowongan
Route::get('/lowongan',[LowonganController::class, 'index']);
Route::get('/detail_lowongan/{lowongan:slug}',[LowonganController::class, 'show'])->middleware('auth');

// pendaftaran
Route::resource('/pendaftaran',PendaftaranController::class)->middleware('auth')->except('create');
Route::get('/pendaftaran/create/{slug}', [PendaftaranController::class, 'create']);


// halaman informasi dan detail informasi
Route::get('/informasi',[InformasiController::class, 'index']);
Route::get('/detail_informasi/{informasi:slug}',[InformasiController::class, 'show']);

// login\
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// profil

// dashboard_profil
Route::resource('/profil', DashboardProfilController::class)->middleware('auth');

// vaksin
Route::resource('/vaksin', DataVaksinController::class)->middleware('auth');

// status Pendaftaran
Route::resource('/status', StatusController::class)->middleware('auth');

// admin access

// dashboard_admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('superAdmin');

    // Dashboard Informasi
    // slug
Route::get('/dashboard/informasi/checkSlug', [DashboardInformasiController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/informasi', DashboardInformasiController::class)->middleware('auth');

// Dashboard Lowongan
Route::get('/dashboard/lowongan/checkSlug', [DashboardLowonganController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/lowongan', DashboardLowonganController::class)->middleware('auth');

// Dashboard Carousell

Route::resource('/dashboard/carousell', DashboardCarouselController::class)->middleware('auth');

// Dashboard Pengurus

Route::resource('/dashboard/pengurus', DashboardPengurusController::class)->middleware('auth');

// Dashboard Pendaftaran

Route::resource('/dashboard/pendaftaran', DashboardPendaftaranController::class)->middleware('auth');

// super admin accsess
// Dashboard Perusahaan
Route::get('/dashboard/perusahaan/checkSlug', [DashboardPerusahaanController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/perusahaan', DashboardPerusahaanController::class)->middleware('auth');

// Dashboard Users

Route::resource('/dashboard/users', DashboardUsersController::class)->middleware('auth');