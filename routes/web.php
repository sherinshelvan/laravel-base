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
//Front End Routes
/*Route::group(['prefix'  => '/', 'namespace' => 'FrondEnd'], function() {
	Route::get('/', function () { return view('welcome'); })->name('welcome');
	Route::get('/login', 'LoginController@index')->name('login');
	Route::get('/', 'LoginController@index')->name('admin.login');
	Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
	Route::get('/login', 'LoginController@index')->name('admin.login');

	Route::match(['get', 'post'], '/user', 'UserController@index')->name('admin.user');
	Route::get('/user/create', 'UserController@create')->name('admin.user.create');
	Route::post('/user/create', 'UserController@store')->name('admin.user.store');
	Route::get('/user/edit/{id}', 'UserController@edit')->name('admin.user.edit')->where('id', '[0-9]+');
	Route::post('/user/edit/{id}', 'UserController@update')->name('admin.user.update')->where('id', '[0-9]+');
	Route::get('/user/destroy/{id}', 'UserController@destroy')->name('admin.user.destroy')->where('id', '[0-9]+');
	Route::get('/profile', 'ProfileController@index')->name('admin.profile');

});
*/
//Back End Routes
Route::group(['prefix'  => '/', 'namespace' => 'BackEnd'], function() {
	Route::get('/', 'LoginController@index')->name('admin.login');
	Route::resource('/user', 'User\UserController');
	Route::get('/login', 'LoginController@index')->name('admin.login');
	Route::get('/settings/{type}', 'SettingsController@index')->name('admin.settings');
});

