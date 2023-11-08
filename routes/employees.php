<?php

use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as'        => 'employee.',
], static function () {
//    Route::group([
//        'middleware' => ['role:employee', 'auth:employees', 'permission:,employees'],
//    ], static function () {
//        Route::get('/', [HomeController::class, 'index'])->name('home');
//    });
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/logging_in', [LoginController::class, 'loggingIn'])->name('logging.in');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/send_confirmation_mail', [RegisterController::class, 'sendConfirmationMail'])->name('send.confirmation.mail');
    Route::get('/confirm_password', [RegisterController::class, 'confirmPassword'])->name('confirm.password');
    Route::post('/confirming_password', [RegisterController::class, 'confirmingPassword'])->name('confirming.password');
    Route::get('/test/{user}', [RegisterController::class, 'test'])->name('test');
});
