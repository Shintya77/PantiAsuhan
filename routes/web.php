<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KegiatanDetailController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\DonasiContrroler;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BankController;
<<<<<<< HEAD
use App\Http\Controllers\BinaanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KegiatanDetailController;
use App\Http\Controllers\HargaKueController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\DetailKueController;
=======
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\BinaanController;
use App\Http\Controllers\DonaturController;

use App\Http\Controllers\PesanController;
use App\Http\Controllers\HargaKueController;
use App\Http\Controllers\KueController;

>>>>>>> 38d078cb7ac2fd8910f7a328fa9cb6789895e9ac
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
    return view('fitur.user.beranda');
});
Route::get('/beranda ',[BerandaController::class, 'beranda']);
Route::prefix('profil')->group(function () {
    Route::get('/sejarah ',[SejarahController::class, 'sejarah']);
    Route::get('/struktur-kepengurusan',[KegiatanController::class, 'struktur']);
    Route::get('/visi ',[VisiController::class, 'visi']);
    Route::get('/kegiatan ',[KegiatanController::class, 'kegiatan']);
});


Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);
Route::resource('kegiatan', KegiatanDetailController::class);
Route::get('/dashboard-donasi',[KegiatanController::class, 'dashboard']);
Route::get('/formulir-donasi',[KegiatanController::class, 'formulir']);
Route::get('/daftar-binaan',[KegiatanController::class, 'binaan']);
Route::get('/donasi',[DonasiContrroler::class, 'index']);
Route::get('/donasi-upload',[VisiController::class, 'upload']);
Route::get('/donasi-riwayat',[VisiController::class, 'riwayat']);

// ROUTE ADMIN DONASI 
Route::resource('bank', BankController::class);
Route::resource('program', ProgramController::class);
Route::resource('binaan', BinaanController::class);
Route::resource('donatur', DonaturController::class);
Route::get('program/cari/data', [ProgramController::class, 'cari'])->name('program.cari');


Route::get('/pesan', function () {
    return view('fitur.pesan_kue.pesan');
});

Route::get('/login', function () {
    return view('fitur.pesan_kue.login');
});

// Route::get('/produk', function () {
//     return 'ok';
// });
Route::resource('produk', ProdukController::class);
// Route::resource('/produk', ProdukController::class);
Route::resource('/keranjang', PesanController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'Pesan'])->group(function (){
    
});
// Route::resource('produk', ProdukController::class);
// Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);
Route::resource('kegiatan', KegiatanDetailController::class);
Route::get('/produk/detail', [ProdukController::class, 'show']);


Route::get('/dashboard', function () {
    return view('layouts.admin.dashboard');
});

Route::get('/kelola-donasi', function () {
    return view('admin.donasi.bank.indexBank');
});

// Route::get('/kelola-binaan', function () {
//     return view('admin.donasi.binaan.indexBinaan');
// });

Route::get('/kelola-bank', function () {
    return view('admin.donasi.bank.indexBank');
});

Route::get('/kelola-produk', function () {
    return view('admin.pesan_kue.produk.index');
});
Route::resource('harga', HargaKueController::class);
Route::get('harga/cari/data', [HargaKueController::class, 'cari'])->name('harga.cari');
Route::resource('kue', KueController::class);
Route::get('kue/cari/data', [KueController::class, 'cari'])->name('kue.cari');
Route::resource('detailKue', DetailKueController::class);
Route::get('detailKue/cari/data', [DetailKueController::class, 'cari'])->name('detailKue.cari');
