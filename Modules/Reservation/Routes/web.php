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

Route::prefix('reservation')->group(function() {
    Route::get('/', 'ReservationController@index')->name('reservation');
    Route::get('/reservation/view/{id}', 'ReservationController@show')->name('reservation_show');


    
    Route::get('/reservation/create', 'ReservationController@create')->name('reservation_create');


// New Reservation 
    // step 1 flight selection
    Route::get('/flight', 'ReservationController@flight_selection')->name('flight');
    Route::post('/flight', 'ReservationController@flight_selection_save')->name('flight_save');
    //step 2 fare insertion
    Route::get('/fare', 'ReservationController@fare_insertion')->name('fare');
    Route::post('/fare', 'ReservationController@fare_insertion_store')->name('save_fare');
    //step 3 pax insertion
    Route::get('/pax', 'ReservationController@pax_insertion')->name('pax');
    Route::post('/pax', 'ReservationController@pax_insertion_store')->name('save_pax');
    //step 4 payment
    Route::get('/payment', 'ReservationController@payment_insertion')->name('payment');
    Route::post('/payment', 'ReservationController@payment_insertion_store')->name('save_payment');
    // step 5 details
    Route::get('/reservation_invoice', 'ReservationController@reservation_invoice')->name('reservation_invoice');
//End new reservation

});
