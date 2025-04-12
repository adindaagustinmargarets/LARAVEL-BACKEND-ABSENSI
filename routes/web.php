<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});
Route::get('/', function () {
    return view('welcome');
});
//Absensi
Route::get('/absensi', [App\Http\Controllers\Backend\Absensi\AbsensiController::class, 'index'])->name('absensi.list');
Route::post('/absensi/peserta', [App\Http\Controllers\Backend\Peserta\PesertaController::class, 'cari_peserta'])->name('peserta.cari-peserta');
Route::post('/absensi/peserta/{kode_peserta}', [App\Http\Controllers\Backend\Absensi\AbsensiController::class, 'absensi_sekarang'])->name('absensi.absensi-sekarang');
Route::delete('/absensi/hapus/{id}', [App\Http\Controllers\Backend\Absensi\AbsensiController::class, 'hapus'])->name('absensi.hapus');
Route::get('/absensi/riwayat/{kode_peserta}', [App\Http\Controllers\Backend\Absensi\AbsensiController::class, 'absensi_riwayat'])->name('absensi.riwayat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
