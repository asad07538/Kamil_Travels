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
// flight Routes
Route::prefix('flight')->group(function() {
    Route::get('/', 'FlightController@index')->name('flights');
    Route::get('/create', 'FlightController@create')->name('flight_create');
    Route::get('/show/{id}', 'FlightController@show')->name('flight_show');
    Route::post('/store', 'FlightController@store')->name('flight_store');
    Route::get('/edit/{id}', 'FlightController@edit')->name('flight_edit');
    Route::post('/update', 'FlightController@update')->name('flight_update');
    Route::get('/delete/{id}', 'FlightController@destroy')->name('flight_delete');
});

// airport Routes
Route::prefix('airport')->group(function() {
    Route::get('/', 'AirportController@index')->name('airports');
    Route::get('/create', 'AirportController@create')->name('airport_create');
    Route::get('/show/{id}', 'AirportController@show')->name('airport_show');
    Route::post('/store', 'AirportController@store')->name('airport_store');
    Route::get('/edit/{id}', 'AirportController@edit')->name('airport_edit');
    Route::post('/update', 'AirportController@update')->name('airport_update');
    Route::get('/delete/{id}', 'AirportController@destroy')->name('airport_delete');
});

// flight_schedule Routes
Route::prefix('flight_schedule')->group(function() {
    Route::get('/', 'ScheduleFlightController@index')->name('flight_schedules');
    Route::get('/create', 'ScheduleFlightController@create')->name('flight_schedule_create');
    Route::get('/show/{id}', 'ScheduleFlightController@show')->name('flight_schedule_show');
    Route::post('/store', 'ScheduleFlightController@store')->name('flight_schedule_store');
    Route::get('/edit/{id}', 'ScheduleFlightController@edit')->name('flight_schedule_edit');
    Route::post('/update', 'ScheduleFlightController@update')->name('flight_schedule_update');
    Route::get('/delete/{id}', 'ScheduleFlightController@destroy')->name('flight_schedule_delete');
});

// sector Routes
Route::prefix('sector')->group(function() {
    Route::get('/index', 'SectorController@index')->name('sectors');
    Route::get('/create', 'SectorController@create')->name('sector_create');
    Route::get('/show/{id}', 'SectorController@show')->name('sector_show');
    Route::post('/store', 'SectorController@store')->name('sector_store');
    Route::get('/edit/{id}', 'SectorController@edit')->name('sector_edit');
    Route::post('/update', 'SectorController@update')->name('sector_update');
    Route::get('/delete/{id}', 'SectorController@destroy')->name('sector_delete');
});
});