<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'        => 'admin',
    'as'            => 'admin.',
], static function () {
    Route::get('/', function() { return redirect()->route('admin.login'); });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/logging_in', [LoginController::class, 'loggingIn'])->name('logging.in');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::group([
        'middleware' => ['role:sadmin', 'auth:admins', 'permission:,admins'],
    ], static function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::get('/role/edit', [RoleController::class, 'edit'])->name('role.edit');
    });
});
