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
	Route::prefix('car_type')->group(function() {
	    Route::get('/', 'CarTypeController@index')->name('car_type_index');
	    Route::get('/create', 'CarTypeController@create')->name('car_type_create');
	    Route::post('/store', 'CarTypeController@store')->name('car_type_store');
	    Route::get('/show/{id}', 'CarTypeController@show')->name('car_type_show');
	    Route::get('/edit/{id}', 'CarTypeController@edit')->name('car_type_edit');
	    Route::post('/update/{id}', 'CarTypeController@update')->name('car_type_update');
	    Route::get('/delete/{id}', 'CarTypeController@destroy')->name('car_type_delete');
	});
	Route::prefix('driver')->group(function() {
	    Route::get('/', 'DriverController@index')->name('driver_index');
	    Route::get('/create', 'DriverController@create')->name('driver_create');
	    Route::post('/store', 'DriverController@store')->name('driver_store');
	    Route::get('/show/{id}', 'DriverController@show')->name('driver_show');
	    Route::get('/edit/{id}', 'DriverController@edit')->name('driver_edit');
	    Route::post('/update/{id}', 'DriverController@update')->name('driver_update');
	    Route::get('/delete/{id}', 'DriverController@destroy')->name('driver_delete');
	});
	Route::prefix('car_sector')->group(function() {
	    Route::get('/', 'CarSectorController@index')->name('car_sector_index');
	    Route::get('/create', 'CarSectorController@create')->name('car_sector_create');
	    Route::post('/store', 'CarSectorController@store')->name('car_sector_store');
	    Route::get('/show/{id}', 'CarSectorController@show')->name('car_sector_show');
	    Route::get('/edit/{id}', 'CarSectorController@edit')->name('car_sector_edit');
	    Route::post('/update/{id}', 'CarSectorController@update')->name('car_sector_update');
	    Route::get('/delete/{id}', 'CarSectorController@destroy')->name('car_sector_delete');
	});
	Route::prefix('car')->group(function() {
	    Route::get('/', 'CarController@index')->name('car_index');
	    Route::get('/create', 'CarController@create')->name('car_create');
	    Route::post('/store', 'CarController@store')->name('car_store');
	    Route::get('/show/{id}', 'CarController@show')->name('car_show');
	    Route::get('/edit/{id}', 'CarController@edit')->name('car_edit');
	    Route::post('/update/{id}', 'CarController@update')->name('car_update');
	    Route::get('/delete/{id}', 'CarController@destroy')->name('car_delete');
	});
	Route::prefix('car_company')->group(function() {
	    Route::get('/', 'CarCompanyController@index')->name('car_company_index');
	    Route::get('/create', 'CarCompanyController@create')->name('car_company_create');
	    Route::post('/store', 'CarCompanyController@store')->name('car_company_store');
	    Route::get('/show/{id}', 'CarCompanyController@show')->name('car_company_show');
	    Route::get('/edit/{id}', 'CarCompanyController@edit')->name('car_company_edit');
	    Route::post('/update/{id}', 'CarCompanyController@update')->name('car_company_update');
	    Route::get('/delete/{id}', 'CarCompanyController@destroy')->name('car_company_delete');
	});	

	Route::prefix('car_booking')->group(function() {
	    Route::get('/', 'CarBookingController@index')->name('car_booking_index');
	    Route::get('/create', 'CarBookingController@create')->name('car_booking_create');
	    Route::post('/store', 'CarBookingController@store')->name('car_booking_store');
	    Route::get('/show/{id}', 'CarBookingController@show')->name('car_booking_show');
	    Route::get('/edit/{id}', 'CarBookingController@edit')->name('car_booking_edit');
	    Route::post('/update/{id}', 'CarBookingController@update')->name('car_booking_update');
	    Route::get('/delete/{id}', 'CarBookingController@destroy')->name('car_booking_delete');
	});	
});
