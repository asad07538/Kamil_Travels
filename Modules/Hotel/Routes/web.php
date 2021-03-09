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
	Route::prefix('hotel')->group(function() {
	    Route::get('/', 'HotelController@index')->name('hotel_index');
	    Route::get('/create', 'HotelController@create')->name('hotel_create');
	    Route::post('/store', 'HotelController@store')->name('hotel_store');
	    Route::get('/show/{id}', 'HotelController@show')->name('hotel_show');
	    Route::get('/edit/{id}', 'HotelController@edit')->name('hotel_edit');
	    Route::post('/update/{id}', 'HotelController@update')->name('hotel_update');
	    Route::get('/delete/{id}', 'HotelController@destory')->name('hotel_delete');
	});
	Route::prefix('room')->group(function() {
	    Route::get('/', 'RoomController@index')->name('room_index');
	    Route::get('/create/', 'RoomController@create')->name('room_create');
	    Route::post('/store', 'RoomController@store')->name('room_store');
	    Route::get('/show/{id}', 'RoomController@show')->name('room_show');
	    Route::get('/edit/{id}', 'RoomController@edit')->name('room_edit');
	    Route::post('/update/{id}', 'RoomController@update')->name('room_update');
	    Route::get('/delete/{id}', 'RoomController@destory')->name('room_delete');
	});
	Route::prefix('room_type')->group(function() {
	    Route::get('/', 'RoomTypeController@index')->name('room_type_index');
	    Route::get('/create', 'RoomTypeController@create')->name('room_type_create');
	    Route::post('/store', 'RoomTypeController@store')->name('room_type_store');
	    Route::get('/show/{id}', 'RoomTypeController@show')->name('room_type_show');
	    Route::get('/edit/{id}', 'RoomTypeController@edit')->name('room_type_edit');
	    Route::post('/update/{id}', 'RoomTypeController@update')->name('room_type_update');
	    Route::get('/delete/{id}', 'RoomTypeController@destory')->name('room_type_delete');
	});
});