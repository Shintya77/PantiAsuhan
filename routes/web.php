<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\ProdukController;

use App\Http\Controllers\PesanController;
use App\Http\Controllers\KegiatanDetailController;
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

// Route::get('/beranda', function () {
//     return view('fitur.user.beranda');
// });
Route::get('/beranda ',[BerandaController::class, 'beranda']);
Route::prefix('profil')->group(function () {
    Route::get('/sejarah ',[SejarahController::class, 'sejarah']);
    Route::get('/struktur-kepengurusan',[KegiatanController::class, 'struktur']);
    Route::get('/visi ',[VisiController::class, 'visi']);
    Route::get('/kegiatan ',[KegiatanController::class, 'kegiatan']);
});


Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);

Route::get('/pesan', function () {
    return view('fitur.pesan_kue.pesan');
});

Route::get('/login_pesan_kue', function () {
    return view('fitur.pesan_kue.login');
});


Route::resource('/produk', ProdukController::class);
Route::resource('/keranjang', PesanController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'Pesan'])->group(function (){
    
});
Route::resource('produk', ProdukController::class);
Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);
Route::resource('kegiatan', KegiatanDetailController::class);
Route::get('/produk/detail', [ProdukController::class, 'show']);