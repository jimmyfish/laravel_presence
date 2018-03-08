<?php

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

Route::get('/', 'MainController@index')->name('client_home');

Route::group(['prefix' => 'auth'], function () {
	Route::get('/login','LoginController@index')->name('client_login');
	Route::post('/login-post', 'LoginController@post')->name('client_login_post');
});

Route::prefix('finger')->group(function () {
	Route::get('/list', 'FingerprintController@index')->name('client_finger_list');
	Route::get('/register', 'FingerprintController@register')->name('client_finger_register');
});

Route::get('/logout', 'LogoutController@index')->name('client_logout');
