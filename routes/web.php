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
use Dompdf\Dompdf;

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

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
//logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/Konfirmasi_keluar', function () {
    return view('keluar');
});

//----------------------- daftar -------------------------//
// dosen
Route::get('/dosen/daftar', [RegisterDosenController::class, 'index']);
Route::post('/dosen/daftar', [RegisterDosenController::class, 'store']);
// mahasiswa
Route::get('/mahasiswa/daftar', [RegisterMahasiswaController::class, 'index']);
Route::post('/mahasiswa/daftar', [RegisterMahasiswaController::class, 'store']);

//----------------------- login -------------------------//
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');

//-----------------------------------------------------------------------

/*
|--------------------------------------------------------------------------
| Kordinator Routes
|--------------------------------------------------------------------------
*/
//dashboard
Route::get('/dashboard', [
    DashboardKordinatorController::class,
    'index',
])->middleware('auth');
//list mahasiswa
Route::get('/list/mahasiswa', [
    MahasiswaController::class,
    'listMahasiswaBimbingan',
])->middleware('auth');
//cari mahasiswa
Route::post('/list/mahasiswa', [
    MahasiswaController::class,
    'search',
])->middleware('auth');
//list dosen
Route::get('/list/dosen', [DosenController::class, 'listDosen'])->middleware(
    'auth'
);
//cari dosen
Route::post('/list/dosen', [DosenController::class, 'search'])->middleware(
    'auth'
);
//lihat mahasiswa bimbingan
Route::get('/lihatMahasiswa/{nim}', [
    MahasiswaController::class,
    'lihatMahasiswa',
])
    ->name('lihatMahasiswa')
    ->middleware('auth');

//lihat dosen
Route::get('/lihatDosen/{nip}', [DosenController::class, 'lihatDosen'])
    ->name('lihatDosen')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Dosen Routes
|--------------------------------------------------------------------------
*/
//dosen
//dashboard
Route::get('/dosen', [DashboardDosenController::class, 'index'])->middleware(
    'auth'
);
//konfirmasi
Route::post('/konfirmasi', [
    DashboardDosenController::class,
    'konfirmasi',
])->middleware('auth');
//list mahasiswa bimbingan
Route::get('/dosen/bimbingan', [
    BimbinganController::class,
    'mahasiswaSedangBimbingan',
]);
//tambahkan mahasiswa bimbingan
Route::post('/dosen/bimbingan', [
    BimbinganController::class,
    'store',
])->middleware('auth');
//list mahasiswa selesai bimbingan
Route::get('/dosen/bimbingan/selesai', [
    BimbinganController::class,
    'mahasiswaSelesaiBimbingan',
])->middleware('auth');

//lihat mahasiswa bimbingan
Route::get('/dosen/lihatMahasiswa/{nim}', [
    MahasiswaController::class,
    'lihatMahasiswa',
])
    ->name('lihatMahasiswaBimbingan')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Mahasiswa Routes
|--------------------------------------------------------------------------
*/
//halamah utama bimbingan
Route::get('/mahasiswa/bimbingan', [
    MahasiswaController::class,
    'index',
])->middleware('auth');
//simpan riwayat bimbinan
Route::post('/mahasiswa/bimbingan/store', [
    RiwayatController::class,
    'store',
])->middleware('auth');
//lihat riwayat bimbingan
Route::get('/mahasiswa/data_mahasiswa', [
    MahasiswaController::class,
    'dataMahasiswa',
])->middleware('auth');
//ubah status bimbingan jadi selesai
Route::get('/mahasiswa/selesai', [
    BimbinganController::class,
    'statusSelesai',
])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Form Routes
|--------------------------------------------------------------------------
*/
//form//
Route::get('mahasiswa/bimbingan/form', [MahasiswaController::class, 'lihat']);
// download form
Route::get('/download/{nim}', [MahasiswaController::class, 'download'])->name(
    'download'
);
