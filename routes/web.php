<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\MultipleStepsFormController;
use App\Http\Livewire\BerkasTable;
use App\Http\Livewire\UserTable;

use function Termwind\render;

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

//UNTUK TABEL-TABEL DULU YANG DIBUAT
//Route::resource('koperasi', KoperasiController::class);
Route::resource('datalowongan', LowonganController::class);
Route::resource('berkas', BerkasController::class);
Route::resource('user', UserController::class);
Route::resource('arsip', ArsipController::class);
Route::get('arsips/create', [ArsipController::class, 'create'])->name('arsips.create');

//
//Route Penjadwalan
Route::get('/penjadwalan', [PenjadwalanController::class, 'index'])->name('penjadwalans');
Route::get('/create/jadwal', [PenjadwalanController::class, 'create'])->name('createJadwal');
Route::post('/saveJadwal', [PenjadwalanController::class, 'store'])->name('saveJadwal');
Route::get('/delete/{id}', [PenjadwalanController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [PenjadwalanController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [PenjadwalanController::class, 'update'])->name('update');



//HALAMAN UTAMA
Route::get('/', function () {return redirect('halaman-utama');})->middleware('guest');
Route::get('halaman-utama', function () {
    return view('pages.halaman-utama');
})->name('halaman-utama');

//Multiple Step Form Route
// Route to view the list of lowongan
Route::get('/lowongan', [MultipleStepsFormController::class, 'lowongan'])->name('pages.pendaftaran.lowongan');
// Route for the first step
Route::get('/create-step-one/{lowongan}', [MultipleStepsFormController::class, 'createStepOne'])->name('pages.pendaftaran.biodata');
Route::post('/create-step-one', [MultipleStepsFormController::class, 'postCreateStepOne'])->name('pages.pendaftaran.postCreateStepOne');
// Route for the second step
Route::get('/create-step-two', [MultipleStepsFormController::class, 'createStepTwo'])->name('pages.pendaftaran.berkas');
Route::post('/create-step-two', [MultipleStepsFormController::class, 'postCreateStepTwo'])->name('pages.pendaftaran.postCreateStepTwo');
// Route for the third step
Route::get('/review', [MultipleStepsFormController::class, 'createStepThree'])->name('pages.review');
Route::post('/review', [MultipleStepsFormController::class, 'postCreateStepThree'])->name('pages.pendaftaran.postCreateStepThree');
//Route for the sukses
Route::get('/sukses', [MultipleStepsFormController::class, 'sukses'])->name('sukses');






Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('guest')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('guest')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('guest')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('guest');
Route::group(['middleware' => 'guest'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('aktivitas');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('dokumen');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('surat-keluar');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('surat-masuk');
	Route::get('berkas', function () {
		return view('berkas.index');
	})->name('berkas-pendaftar');
	Route::get('informasi-pendaftar', [UserController::class, 'index'])->name('informasi-pendaftar');
    Route::get('data-lowongan', [LowonganController::class, 'index'])->name('data-lowongan');
    Route::get('berkas',[BerkasController::class, 'index'])->name('berkas-pendaftar');
	Route::get('penjadwalans',[PenjadwalanController::class, 'index'])->name('penjadwalans');



//Default dari Template
// Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
// Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
// Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
// Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
// Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
// Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
// Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
// Route::get('verify', function () {
// 	return view('sessions.password.verify');
// })->middleware('guest')->name('verify');
// Route::get('/reset-password/{token}', function ($token) {
// 	return view('sessions.password.reset', ['token' => $token]);
// })->middleware('guest')->name('password.reset');

// Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
// Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
// Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('billing', function () {
// 		return view('pages.billing');
// 	})->name('billing');
// 	Route::get('tables', function () {
// 		return view('pages.tables');
// 	})->name('tables');
// 	Route::get('rtl', function () {
// 		return view('pages.rtl');
// 	})->name('rtl');
// 	Route::get('virtual-reality', function () {
// 		return view('pages.virtual-reality');
// 	})->name('virtual-reality');
// 	Route::get('notifications', function () {
// 		return view('pages.notifications');
// 	})->name('notifications');
// 	Route::get('static-sign-in', function () {
// 		return view('pages.static-sign-in');
// 	})->name('static-sign-in');
// 	Route::get('static-sign-up', function () {
// 		return view('pages.static-sign-up');
// 	})->name('static-sign-up');
// 	Route::get('user-management', function () {
// 		return view('pages.laravel-examples.user-management');
// 	})->name('user-management');
// 	Route::get('user-profile', function () {
// 		return view('pages.laravel-examples.user-profile');
// 	})->name('user-profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
