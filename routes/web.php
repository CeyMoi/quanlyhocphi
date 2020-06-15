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

Route::get('/', function () {
    return view('welcome');
}); /// đây là thay đổi


Route::group(['prefix' => 'client', 'namespace' => 'Client', 'as' => 'client.'], function() {

	Route::group([
		'namespace' => 'Auth',
		'as' => 'auth.',
		'middleware' => 'guest:sinh_vien'
	], function() {
		Route::get('login', 'LoginController@index')->name('login');
		Route::post('login', 'LoginController@login')->name('login.store');
	});

	Route::group(['middleware' => 'auth.client'], function() {
		Route::get('', 'HomeController@index')->name('index');

		Route::get('logout', function() {
			\Auth::guard('sinh_vien')->logout();
			return redirect()->route('client.login');
		})->name('logout');

		Route::resource('profile', 'ProfileController')->only(['index']);
	});
});