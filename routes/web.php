<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ArsipController;


  
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
    
Route::resource('arsip', ArsipController::class);
Route::get('/arsips/create', [ArsipController::class, 'create'])->name('arsips.create');
// Route::get('/arsip', 'ArsipController@index')->name('arsip.index');
// Route::delete('/arsip/{id}', 'ArsipController@destroy')->name('arsip.destroy');
// Route::get('/arsip', 'App\Http\Controllers\Admin\ArsipController@index');
// Route::get('/arsip', [ArsipController::class, 'index']);
// Route::put('/arsip/{arsip}', [ArsipController::class, 'update'])->name('arsip.update');
// Route::post('/arsip', 'ArsipController@store')->name('arsip.store');
// Route::get('/arsip', [ArsipController::class, 'index']);
// Route::get('/arsips/{id}', [ArsipController::class, 'show'])->name('arsips.show');
// Route::get('/arsips/{id}/edit', [ArsipController::class, 'edit'])->name('arsips.edit');
// Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
// Route::get('/arsips', [ArsipController::class, 'index']);
