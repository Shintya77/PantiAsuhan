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
use App\Http\Controllers\BinaanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KueController;
use App\Http\Controllers\DetailKueController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\DnsNoLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BankCateringController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RekapPesanController;


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
Route::get('/galeri-panti',[KegiatanController::class, 'galeri']);
Route::get('/kegiatan-panti',[KegiatanController::class, 'kegiatanDetail']);
Route::get('/donasi',[DonasiContrroler::class, 'program']);
Route::get('/formulir-donasi-panti',[DnsNoLoginController::class, 'form']);
Route::post('/formulir-donasi-panti',[DnsNoLoginController::class, 'formulir']);
Route::get('/rekap-donasi',[DonasiContrroler::class, 'rekap']);
Route::get('/rekap-donasi/{program}',[DonasiContrroler::class, 'rekapProgram'])->name('rekap.donasi');
Route::get('/rekap-program-cari', [DonasiContrroler::class, 'rekapCari'])->name('rekapProgram.cari');







Route::resource('produk', ProdukController::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function (){
    // Route::get('/dashboard', function () {
    // return view('layouts.admin.dashboard');
    // });
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // ROUTE ADMIN DONASI 
    Route::resource('bank', BankController::class);
    Route::resource('program', ProgramController::class);
    Route::resource('binaan', BinaanController::class);
    Route::resource('donatur', DonaturController::class);
    Route::get('program/cari/data', [ProgramController::class, 'cari'])->name('program.cari');
    Route::get('bank/cari/data', [BankController::class, 'cari'])->name('bank.cari');
    Route::get('binaan/cari/data', [BinaanController::class, 'cari'])->name('binaan.cari');
    // Route::get('donatur/cari/data', [DonaturController::class, 'cari'])->name('donatur.cari');

    //ROUTE ADMIN WEB PROFIL
    Route::resource('struktur', StrukturController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('kegiatan', KegiatanDetailController::class);
    Route::get('struktur/cari/data', [StrukturController::class, 'cari'])->name('struktur.cari');
    Route::get('kegiatan/cari/data', [KegiatanDetailController::class, 'cari'])->name('kegiatan.cari');
    
    // ROUTE ADMIN CATERING KUE
    Route::resource('kue', KueController::class);
    Route::get('kue/cari/data', [KueController::class, 'cari'])->name('kue.cari');
    Route::resource('pesan', RekapPesanController::class);
    Route::get('pesan/cari/data', [RekapPesanController::class, 'cari'])->name('pesan.cari');



});

Route::middleware(['auth', 'donatur'])->group(function (){
    Route::get('/dashboard-donasi',[KegiatanController::class, 'dashboard']);
    Route::get('/formulir-donasi',[DonasiContrroler::class, 'form']);
    Route::post('/formulir-donasi',[DonasiContrroler::class, 'formulir']);
    Route::get('/daftar-binaan',[DonasiContrroler::class, 'binaan']);
    Route::get('/donasi-upload',[VisiController::class, 'upload']);
    Route::get('/donasi-riwayat',[DonasiContrroler::class, 'riwayat']);
});
// Route::resource('produk', ProdukController::class);
// Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produk/detail', [ProdukController::class, 'show']);

Route::middleware(['auth', 'pemesan'])->group(function (){
    // Route::get('/keranjang', [PesanController::class, 'index'])->name('index');
    // Route::post('/keranjang', [PesanController::class, 'store'])->name('store');
    Route::resource('/keranjang', PesanController::class)->only(['index', 'store', 'destroy']);

    // Route::get('/bayar', function () {
    //     return view('fitur.pesan_kue.checkout');
    //     });

    Route::get('/bayar', [BankCateringController::class, 'index']);
    Route::post('/bayar', [BankCateringController::class, 'bayar']);


    Route::post('/checkout/{id}', [CheckOutController::class, 'store']);

    Route::get('/riwayat', [CheckOutController::class, 'riwayat']);

Route::get('/bayar', [BankCateringController::class, 'index']);
Route::post('/bayar', [BankCateringController::class, 'bayar']);
Route::get('/onProcess', [CheckoutController::class,  'onProcess']);
    Route::get('/bayar', [BankCateringController::class, 'index']);
    Route::post('/bayar', [BankCateringController::class, 'bayar']);

