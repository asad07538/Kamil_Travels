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
 
Route::prefix('bank')->group(function() {
    Route::get('/', 'BankController@index')->name('bank_index');

// Banks
    Route::get('/banks', 'BankController@banks')->name('bank_banks');
    Route::get('/banks/create', 'BankController@create')->name('bank_create');
    Route::post('/banks/store', 'BankController@store')->name('bank_store');
    Route::get('/banks/show/{id}', 'BankController@show')->name('bank_show');
    Route::get('/banks/edit/{id}', 'BankController@edit')->name('bank_edit');
    Route::post('/banks/update', 'BankController@update')->name('bank_update');
    Route::get('/banks/delete/{id}', 'BankController@destroy')->name('bank_delete');


// Bank Accounts
    Route::get('/bank_accounts/index/', 'BankAccountController@index')->name('bank_accounts');
    Route::get('/bank_accounts/show/{id}', 'BankAccountController@show')->name('bank_accounts_show');
    Route::get('/bank_accounts/create/{id}', 'BankAccountController@create')->name('bank_accounts_create');
    Route::post('/bank_accounts/store', 'BankAccountController@store')->name('bank_accounts_store');
    Route::get('/bank_accounts/edit/{id}', 'BankAccountController@edit')->name('bank_accounts_edit');
    Route::post('/bank_accounts/update', 'BankAccountController@update')->name('bank_accounts_update');
    Route::get('/bank_accounts/delete/{id}', 'BankAccountController@destroy')->name('bank_accounts_delete');

    
// Bank Transactions
    Route::get('/bank_transactions', 'TransactionController@index')->name('bank_transactions');

    Route::get('/bank_transactions/create', 'TransactionController@create')->name('bank_transactions_create');
    Route::post('/bank_transactions/store', 'TransactionController@store')->name('bank_transactions_store');
    Route::get('/bank_transactions/show/{id}', 'TransactionController@show')->name('bank_transactions_show');
    Route::get('/bank_transactions/edit/{id}', 'TransactionController@edit')->name('bank_transactions_edit');
    Route::post('/bank_transactions/update', 'TransactionController@update')->name('bank_transactions_update');
    Route::get('/bank_transactions/delete/{id}', 'TransactionController@destroy')->name('bank_transactions_delete');
});
});
