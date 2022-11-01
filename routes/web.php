<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\ProdukController;
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


Route::resource('produk', ProdukController::class);
Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);
Route::resource('kegiatan', KegiatanDetailController::class);
Route::get('/produk/detail', [ProdukController::class, 'show']);
