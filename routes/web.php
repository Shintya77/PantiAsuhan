<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\KegiatanController;
<<<<<<< HEAD
use App\Http\Controllers\VisiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\StrukturController;

=======
use App\Http\Controllers\ProdukController;
>>>>>>> 1ec15702a389fd9ba0f9f849e493b34f1b24009a
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
<<<<<<< HEAD
Route::resource('galeri', GaleriController::class);
Route::resource('struktur', StrukturController::class);
=======
Route::get('/produk/detail', [ProdukController::class, 'show']);
<<<<<<< HEAD
Route::get('/pesan', function () {
    return view('fitur.pesan_kue.pesan');
});
Route::get('/login_pesan_kue', function () {
    return view('fitur.pesan_kue.login');
});
=======
>>>>>>> 1ec15702a389fd9ba0f9f849e493b34f1b24009a
>>>>>>> 570022cf54a4747df7859516a2c36a8849fbf0ee
