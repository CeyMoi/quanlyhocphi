<?php

Route::get('', 'LoginController@view_login')->name('view_login');

Route::post('process_login', 'LoginController@process_login')->name('process_login');

Route::group(['middleware' => 'CheckLogin'], function () {
    Route::get('welcome', 'Controller@welcome')->name('welcome');
});

Route::resource('khoa','KhoaController');
Route::resource('lop','LopController');

	
