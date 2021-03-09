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
Route::prefix('supplier')->group(function() {
    Route::get('/', 'SupplierController@index');
});
Route::prefix('airline')->group(function() {
    Route::get('/', 'AirlineController@index')->name('airline_index');
    Route::get('/show/{id}', 'AirlineController@show')->name('airline_show');
    Route::get('/create/', 'AirlineController@create')->name('airline_create');
    Route::post('/store/', 'AirlineController@store')->name('airline_store');
    Route::get('/edit/{id}', 'AirlineController@edit')->name('airline_edit');
    Route::post('/update/', 'AirlineController@update')->name('airline_update');
    Route::get('/delete/{id}', 'AirlineController@destory')->name('airline_delete');
});
});
