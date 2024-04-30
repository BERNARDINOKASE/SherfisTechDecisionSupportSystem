<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SubKriteriaController;
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

Route::get('/dashboard', function () {
    return view('content.dashboard');
})->name('dashboard')->middleware('auth');

Route::controller(AuthenticateController::class)
    // ->middleware('guest')
    ->group(function () {
        Route::get('/', 'loginView')->name('login');
        Route::get('/register', 'registerView')->name('register');
        Route::post('/register', 'storeRegister')->name('post.register');
        Route::post('/login', 'storeLogin')->name('post.login');
    });

Route::controller(KriteriaController::class)
    ->middleware('auth')
    ->prefix('kriteria')
    ->group(function () {
        Route::get('/', 'index')->name('kriteria.index');
        Route::get('/tambah', 'create')->name('kriteria.create');
        Route::get('/ubah={id}', 'edit')->name('kriteria.edit');
        Route::patch('/ubah={id}', 'update')->name('kriteria.update');
        Route::post('/tambah', 'store')->name('kriteria.store');
        Route::delete('hapus={id}', 'destroy')->name('kriteria.delete');


        Route::get('/subkriteria', 'destroy')->name('kriteria.delete');
    });

Route::controller(AlternatifController::class)
    ->middleware('auth')
    ->prefix('alternatif')
    ->group(function () {
        Route::get('/', 'index')->name('alternatif.index');
        Route::get('/tambah', 'create')->name('alternatif.create');
        Route::get('/ubah={id}', 'edit')->name('alternatif.edit');
        Route::patch('/ubah={id}', 'update')->name('alternatif.update');
        Route::post('/tambah', 'store')->name('alternatif.store');
        Route::delete('hapus={id}', 'destroy')->name('alternatif.delete');
    });

Route::controller(SubKriteriaController::class)
    ->middleware('auth')
    ->prefix('subkriteria')
    ->group(function () {
        Route::get('/kriteria={id}', 'index')->name('subkriteria.index');
        Route::get('/tambah', 'create')->name('subkriteria.create');
        Route::post('/tambah', 'store')->name('subkriteria.store');
        Route::delete('hapus={id}', 'destroy')->name('subkriteria.delete');
    });

Route::controller(NilaiController::class)
    ->middleware('auth')
    ->prefix('nilai')
    ->group(function () {
        Route::get('/alternatif={id}', 'index')->name('nilai.index');
        Route::get('/alternatif={id}/tambah', 'create')->name('nilai.create');
        Route::post('/tambah', 'store')->name('nilai.store');
        Route::delete('hapus={id}', 'destroy')->name('nilai.delete');
    });
