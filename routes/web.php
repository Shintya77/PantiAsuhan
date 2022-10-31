<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
<<<<<<< HEAD
use App\Http\Controllers\ProdukController;
=======
use App\Http\Controllers\VisiController;
>>>>>>> 2b80ccc09d891b667bff210440df7a5c808abdf8

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
