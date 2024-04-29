<?php

use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\KriteriaController;
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
        Route::post('/store', 'store')->name('kriteria.store');
        Route::delete('hapus/{id}', 'destroy')->name('kriteria.delete');
    });
