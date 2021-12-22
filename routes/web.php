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
    return view('home', [
        "title" => "Beranda",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
        "active" => 'about'
    ]);
});

Route::get('/lowongan', function () {
    return view('lowongan', [
        "title" => "Lowongan",
        "active" => 'lowongan'
    ]);
});

Route::get('/detail_lowongan', function () {
    return view('detail_lowongan', [
        "title" => "Detail Lowongan",
        "active" => 'lowongan'
    ]);
});

Route::get('/informasi', function () {
    return view('informasi', [
        "title" => "Informasi",
        "active" => 'informasi'
    ]);
});

//halaman detail lowongan
Route::get('lowongan/{slug_lowongan}', function($slug_lowongan) {
    return view('detail_lowongan');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);