<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\WPController;
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

Route::controller(AuthenticateController::class)
    // ->middleware('guest')
    ->group(function () {
        Route::get('/', 'loginView')->name('login');
        Route::get('/register', 'registerView')->name('register');
        Route::post('/register', 'storeRegister')->name('post.register');
        Route::post('/login', 'storeLogin')->name('post.login');
        Route::get('/logout', 'logout')->name('logout');
    });

Route::controller(DashboardController::class)
    ->middleware('auth')
    ->prefix('beranda')
    ->group(function () {
        Route::get('/', 'index')->name('beranda');
        Route::get('/tentang-spk', 'about')->name('dashboard.about');
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

Route::controller(NilaiController::class)
    ->middleware('auth')
    ->prefix('nilai')
    ->group(function () {
        Route::get('/alternatif={id_alternatif}', 'index')->name('nilai.index');
        Route::get('/edit/nilai={id_nilai}', 'edit')->name('nilai.edit');
        Route::patch('/perbarui/{id_nilai}', 'update')->name('nilai.update');
        Route::delete('hapus={id}', 'destroy')->name('nilai.delete');
    });

Route::controller(WPController::class)
    ->middleware('auth')
    ->prefix('metode')
    ->group(function () {
        Route::get('/', 'index')->name('metode.index');
        Route::get('/proses-data', 'weightingProductPorcess')->name('metode.proses-data');
        // Route::get('/alternatif={id}/tambah', 'create')->name('nilai.create');
        // Route::post('/tambah', 'store')->name('nilai.store');
        // Route::delete('hapus={id}', 'destroy')->name('nilai.delete');
    });
