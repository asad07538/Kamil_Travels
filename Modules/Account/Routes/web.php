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

Route::middleware(['auth','verified'])->group(function () {
	Route::prefix('account')->group(function() {
	    Route::get('/', 'AccountController@index')->name('accounts');
	    Route::get('/{id}', 'AccountController@show')->name('accounts_show');
	});
	Route::prefix('head_accounts')->group(function() {
	    Route::get('/', 'HeadAccountController@index')->name('head_accounts');
	    Route::get('/show/{id}', 'HeadAccountController@show')->name('head_accounts_show');
	    Route::get('/edit/{id}', 'HeadAccountController@edit')->name('head_accounts_edit');
	    Route::post('/update', 'HeadAccountController@update')->name('head_accounts_update');
	});
	Route::prefix('root_accounts')->group(function() {
	    Route::get('/', 'RootAccountController@index')->name('root_accounts');
	    Route::get('/{id}', 'RootAccountController@show')->name('root_accounts_show');
	});
});
