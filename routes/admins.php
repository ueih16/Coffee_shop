<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'        => 'admin',
    'as'        => 'admin.',
], static function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});
