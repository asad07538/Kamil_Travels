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
	Route::prefix('customer')->group(function() {
	    Route::get('/', 'CustomerController@index')->name('customer_index');
	    Route::get('/create', 'CustomerController@create')->name('customer_create');
	    Route::post('/store', 'CustomerController@store')->name('customer_store');
	    Route::get('/show/{id}', 'CustomerController@show')->name('customer_show');
	    Route::get('/edit/{id}', 'CustomerController@edit')->name('customer_edit');
	    Route::post('/update/{id}', 'CustomerController@update')->name('customer_update');
	    Route::get('/delete/{id}', 'CustomerController@destory')->name('customer_delete');
	});
	Route::prefix('my')->group(function() {
	    Route::get('/points/', 'customerbookingscontroller@points')->name('points');
	    Route::get('/bookings/', 'customerbookingscontroller@bookings')->name('bookings');
	    Route::get('/ticket/bookings', 'customerbookingscontroller@ticket_bookings')->name('ticket_bookings');
	    Route::get('/car/bookings', 'customerbookingscontroller@car_bookings')->name('car_bookings');
	    Route::get('/hotel/bookings', 'customerbookingscontroller@hotel_bookings')->name('hotel_bookings');
	});
});
