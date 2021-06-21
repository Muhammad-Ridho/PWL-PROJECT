<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

use App\Htpp\Controllers\LaporanController;
use App\Http\Controllers\LaporanController as ControllersLaporanController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource('anggota', AnggotaController::class);

Route::resource('buku', BukuController::class);

Route::resource('transaksi', TransaksiController::class);
// Route::post('/transaksi/bukuhilang/{id}', TransaksiController::class, 'updatehilang')->name('bukuhilang');

Route::resource('user', UserController::class);

Route::get('laporan/buku', [App\Http\Controllers\LaporanController::class, 'buku']);

Route::get('/laporan/buku', [ControllersLaporanController::Class, 'buku']);
Route::get('/laporan/buku/pdf', [ControllersLaporanController::Class, 'bukuPdf']);

Route::get('/laporan/trs', [ControllersLaporanController::class, 'transaksi']);
Route::get('/laporan/trs/pdf', [ControllersLaporanController::class, 'transaksiPdf']);

