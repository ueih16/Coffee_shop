<?php

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

Route::group([
    'namespace' => 'App\Http\Controllers\User',
    'as'        => 'user.',
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/logging_in', 'LoginController@loggingIn')->name('logging.in');
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/registering', 'RegisterController@registering')->name('registering');
});
