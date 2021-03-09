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
Route::prefix('employee')->group(function() {
    Route::get('/', 'EmployeeController@index')->name('employee_index');
    Route::get('/create', 'EmployeeController@create')->name('employee_create');
    Route::post('/store', 'EmployeeController@store')->name('employee_store');
    Route::get('/show/{id}', 'EmployeeController@show')->name('employee_show');
    Route::get('/edit/{id}', 'EmployeeController@edit')->name('employee_edit');
    Route::post('/update/{id}', 'EmployeeController@update')->name('employee_update');
    Route::get('/delete/{id}', 'EmployeeController@destory')->name('employee_delete');
});
});
