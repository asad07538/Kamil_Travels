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
	Route::prefix('common')->group(function() {
	    Route::get('/', 'CountryController@index');
	    Route::get('/countries', 'CountryController@index')->name('countries');
	    Route::get('/country/create', 'CountryController@create')->name('country_create');
	    Route::get('/country/show/{id}', 'CountryController@show')->name('country_show');
	    Route::post('/country/store', 'CountryController@store')->name('country_store');
	    Route::get('/country/edit/{id}', 'CountryController@edit')->name('country_edit');
	    Route::post('/country/update', 'CountryController@update')->name('country_update');
	    Route::get('/country/delete/{id}', 'CountryController@destroy')->name('country_delete');
	});


	Route::prefix('location')->group(function() {
	    Route::get('/', 'LocationController@index')->name('location_index');
	    Route::get('/create/', 'LocationController@create')->name('location_create');
	    Route::post('/store', 'LocationController@store')->name('location_store');
	    Route::get('/show/{id}', 'LocationController@show')->name('location_show');
	    Route::get('/edit/{id}', 'LocationController@edit')->name('location_edit');
	    Route::post('/update/{id}', 'LocationController@update')->name('location_update');
	    Route::get('/delete/{id}', 'LocationController@destory')->name('location_delete');
	});


	Route::prefix('city')->group(function() {
	    Route::get('/', 'CityController@index')->name('city_index');
	    Route::get('/create/', 'CityController@create')->name('city_create');
	    Route::post('/store', 'CityController@store')->name('city_store');
	    Route::get('/show/{id}', 'CityController@show')->name('city_show');
	    Route::get('/edit/{id}', 'CityController@edit')->name('city_edit');
	    Route::post('/update/{id}', 'CityController@update')->name('city_update');
	    Route::get('/delete/{id}', 'CityController@destory')->name('city_delete');
	});
});
