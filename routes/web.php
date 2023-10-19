<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailTestController;
use App\Http\Controllers\EnvUpdateController;
use App\Http\Controllers\AuthController;
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

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');

    Route::get('email-test', [EmailTestController::class, 'index'])->name('email-test');
    Route::post('/send-email', [EmailTestController::class, 'sendEmail'])->name('send.email');

    Route::get('env-update', [EnvUpdateController::class, 'env_update'])->name('env-update.index');
    Route::post('/send-env-update', [EnvUpdateController::class, 'send_env_update'])->name('env-update.send');

    Route::get('env-db-update', [EnvUpdateController::class, 'env_db_update'])->name('env-db-update.index');
    Route::post('/send-env-db-update', [EnvUpdateController::class, 'send_env_db_update'])->name('env-db-update.send');
});


