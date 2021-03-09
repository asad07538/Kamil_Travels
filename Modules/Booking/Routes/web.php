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

Route::prefix('booking')->group(function() {
    Route::get('/index/', 'BookingController@index')->name('booking_index');
    Route::get('/show/{id}', 'BookingController@show')->name('booking_show');
    Route::get('/create/', 'BookingController@create')->name('booking_create');
    Route::post('/store/', 'BookingController@store')->name('booking_store');
});

Route::prefix('booking/create')->group(function() {
    Route::get('/PNR/{id}', 'BookingPnrController@createpnr')->name('booking_create_pnr');
    Route::get('/PNR/{id}/{pnr_id}', 'BookingPnrController@show')->name('booking_pnr_show');

    // iternary
    Route::get('/PNR/iternary/{id}/{pnr_id}', 'BookingPnrController@createpnriternary')->name('booking_create_pnr_iternary');
    Route::post('/PNR/iternarystore/', 'BookingPnrController@storepnriternary')->name('booking_store_pnr_iternary');
    // flight
    Route::get('/PNR/flight/{id}/{pnr_id}', 'BookingPnrController@createpnrflight')->name('booking_create_pnr_flight');
    Route::post('/PNR/flightstore/', 'BookingPnrController@storepnrflight')->name('booking_store_pnr_flight');
    // fare
    Route::get('/PNR/fare/{id}/{pnr_id}', 'BookingPnrController@createpnrfare')->name('booking_create_pnr_fare');
    Route::post('/PNR/fare/', 'BookingPnrController@storepnrfare')->name('booking_store_pnr_fare');
    // pax
    Route::get('/PNR/pax/{id}/{pnr_id}', 'BookingPnrController@createpnrpax')->name('booking_create_pnr_pax');
    Route::post('/PNR/paxstore/', 'BookingPnrController@storepnrpax')->name('booking_store_pnr_pax');

    // payment
    Route::get('/PNR/payment/{id}/{pnr_id}', 'BookingPnrController@createpayment')->name('booking_create_payment');
    Route::post('/PNR/paymentstore/', 'BookingPnrController@storepayment')->name('booking_store_payment');
    

    // ticket_number
    Route::get('/PNR/ticket_number/{id}/{pnr_id}', 'BookingPnrController@enter_ticket_number')->name('pnr_enter_ticket_number');
    Route::post('/PNR/ticket_number_store/', 'BookingPnrController@store_ticket_number')->name('pnr_ticket_number_store');
});
Route::prefix('booking/car/create')->group(function() {
    Route::get('/{bid}', 'CarBookingController@listcarbooking')->name('booking_car_booking_list');
    Route::get('/{bid}/{cbid}', 'CarBookingController@selectcarbooking')->name('booking_car_booking_select');
    Route::post('/store', 'CarBookingController@store')->name('booking_car_booking_store');
    Route::get('/show/{bid}/{cbid}', 'CarBookingController@show')->name('booking_car_booking_show');
});
Route::prefix('booking/payment')->group(function() {
    Route::get('/cash/{bid}', 'PaymentController@cash')->name('booking_payment_cash');
    Route::post('/cash_store', 'PaymentController@cash_store')->name('booking_payment_cash_store');
    Route::get('/credit/{bid}', 'PaymentController@credit')->name('booking_payment_credit');
    Route::post('/credit_store', 'PaymentController@credit_store')->name('booking_payment_credit_store');
    Route::get('/cheque/{bid}', 'PaymentController@cheque')->name('booking_payment_cheque');
    Route::post('/cheque_store', 'PaymentController@cheque_store')->name('booking_payment_cheque_store');
});


});