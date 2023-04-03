<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\PenjadwalanController;

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

Route::resource('koperasi', KoperasiController::class);
Route::resource('datalowongan', LowonganController::class);
Route::resource('berkas', BerkasController::class);
Route::resource('user', UserController::class);
Route::resource('arsip', ArsipController::class);
Route::get('/arsips/create', [ArsipController::class, 'create'])->name('arsips.create');
//Route Penjadwalan
Route::get('/', [PenjadwalanController::class, 'index'])->name('penjadwalans');
Route::get('/create', [PenjadwalanController::class, 'create'])->name('createJadwal');
Route::post('/saveJadwal', [PenjadwalanController::class, 'saveJadwal'])->name('saveJadwal');
Route::get('/Delete/{id}', [PenjadwalanController::class, 'Delete'])->name('Delete');
Route::get('/edit/{id}', [PenjadwalanController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PenjadwalanController::class, 'update'])->name('update');
