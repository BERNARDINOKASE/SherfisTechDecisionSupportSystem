<?php

use App\Http\Controllers\Auth\AuthenticateController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('content.dashboard');
})->name('dashboard')->middleware('auth');

Route::controller(AuthenticateController::class)->middleware('guest')->group(function () {
    Route::get('/', 'loginView')->name('login');
    Route::get('/register', 'registerView')->name('register');
    Route::post('/register', 'storeRegister')->name('post.register');
    Route::post('/login', 'storeLogin')->name('post.login');
});
