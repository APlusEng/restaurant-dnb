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

Route::get('/', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['after' => 'auth', 'prefix' => 'admin'], function () {
	Route::name('admin.')->group(function() {
		Route::get('/setting', 'SettingController@index')->name('setting');
		Route::put('/setting/{id}', 'SettingController@update')->name('setting.update');
	});
	Route::resource('notice', 'NoticeController', ['as' => 'admin']);
	Route::resource('video', 'VideoController', ['as' => 'admin']);
	Route::resource('news', 'NewsController', ['as' => 'admin']);
	Route::resource('advertisement', 'AdvertisementController', ['as' => 'admin']);
});

