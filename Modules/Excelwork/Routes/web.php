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

Route::prefix('excelwork')->group(function() {
    Route::get('/', 'ExcelworkController@index')->name('excelhome');
    Route::post('/mainledgerimport', 'Importcontroller@mainlegerimport')->name('mainimport');
    Route::post('/customerledgerimport', 'Importcontroller@CustomerLedgerImport')->name('customerimport');

    Route::get('/search', 'Searchcontroller@search')->name('search');


});
