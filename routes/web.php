<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterMahasiswaController;
use App\Http\Controllers\RegisterDosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DashboardKordinatorController;
use App\Http\Controllers\DashboardDosenController;

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

// kordinator
Route::get('/dashboard', [DashboardKordinatorController::class, 'index']);
Route::get('/list-mahasiswa', [MahasiswaController::class, 'listMahasiswa']);
Route::get('/list-dosen', [DosenController::class, 'listDosen']);

// Route::get('/list-dosen', function () {
//     return view('/kordinator/dosen');
// });

// Route::get('/list-mahasiswa', function () {
//     return view('/kordinator/mahasiswa');
// });

// Mahasiswa
Route::get('/mahasiswa/bimbingan', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/bimbingan/store', [RiwayatController::class, 'store']);
// Route::post('/mahasiswa/bimbingan/buat_catatan', [
//     BimbinganController::class,
//     'simpanRiwayatBimbingan',
// ]);

//dosen
//dashboard
Route::get('/dosen', [DashboardDosenController::class, 'index']);
Route::post('/konfirmasi', [DashboardDosenController::class, 'konfirmasi']);
//bimbingan
Route::get('/dosen/bimbingan', [BimbinganController::class, 'index']);
Route::post('/dosen/bimbingan', [BimbinganController::class, 'store']);

// daftar //
// dosen
Route::get('/dosen/daftar', [RegisterDosenController::class, 'index']);
Route::post('/dosen/daftar', [RegisterDosenController::class, 'store']);
// mahasiswa
Route::get('/mahasiswa/daftar', [RegisterMahasiswaController::class, 'index']);
Route::post('/mahasiswa/daftar', [RegisterMahasiswaController::class, 'store']);

// masuk //
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
