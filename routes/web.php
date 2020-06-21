<?php

Route::get('', 'LoginController@view_login')->name('view_login');

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

		Route::get('profile', 'ProfileController@index')->name('profile.index');
		Route::put('profile', 'ProfileController@update')->name('profile.update');
		Route::post('profile/password', 'ProfileController@changePassword')->name('profile.password');
	});
});

Route::post('process_login', 'LoginController@process_login')->name('process_login');

Route::group(['middleware' => 'CheckLogin'], function () {
    Route::get('welcome', 'Controller@welcome')->name('welcome');
});

Route::resource('khoa','KhoaController');
Route::resource('lop','LopController');

	
