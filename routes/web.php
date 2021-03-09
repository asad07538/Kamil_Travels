<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 //Permission routes 
Route::get('/permission/', 'PermissionController@index')->name('permission.index')->middleware('auth')->middleware('can:has_per,"permission-index"'); 

 //Group routes 
Route::get('/group/', 'GroupController@index')->name('group.index')->middleware('auth')->middleware('can:has_per,"group-index"'); 
Route::get('/group/create', 'GroupController@create')->name('group.create')->middleware('auth')->middleware('can:has_per,"group-create"'); 
Route::post('/group/store', 'GroupController@store')->name('group.store')->middleware('auth')->middleware('can:has_per,"group-create"'); 
Route::get('/group/edit', 'GroupController@edit')->name('group.edit')->middleware('auth')->middleware('can:has_per,"group-edit"'); 
Route::post('/group/update', 'GroupController@update')->name('group.update')->middleware('auth')->middleware('can:has_per,"group-edit"'); 
Route::get('/group/{id}', 'GroupController@show')->name('group.show')->middleware('auth')->middleware('can:has_per,"group-show"');
Route::get('/group/delete/{id}', 'GroupController@destroy')->name('group.delete')->middleware('auth')->middleware('can:has_per,"group-delete"');

//user routes 
Route::get('/users/', 'UserController@index')->name('user.index')->middleware('auth')->middleware('can:has_per,"user-index"'); 
Route::post('/users/store', 'UserController@store')->name('user.store')->middleware('auth')->middleware('can:has_per,"user-create"'); 
Route::post('/users/update', 'UserController@update')->name('user.update')->middleware('auth')->middleware('can:has_per,"user-edit"'); 
Route::get('/users/{id}', 'UserController@show')->name('user.show')->middleware('auth')->middleware('can:has_per,"user-show"'); 
Route::get('/users/delete/{id}', 'UserController@destroy')->name('user.delete')->middleware('auth')->middleware('can:has_per,"user-delete"'); 

Route::get('/export/users', 'UserController@export')->name('export_user_excel');
Route::post('/import/users/', 'UserController@import')->name('import_user_excel');

 //Permission routes 
// Route::get('/setting/', 'SettingController@index')->name('setting')->middleware('auth')->middleware('can:has_per,"post"'); 

 //Profiles 
Route::get('/self/', 'UserController@myprofile')->name('profile.my')->middleware('auth')->middleware('can:has_per,"my-profile"');
Route::post('/profile/', 'UserController@profile_password_update')->name('change.pass')->middleware('auth')->middleware('can:has_per,"profile-password-changed"'); 
Route::post('/profile/', 'UserController@profile_edit')->name('profile.update')->middleware('auth')->middleware('can:has_per,"update-profile"'); 
Route::put('/profile/', 'UserController@profile_password_update')->name('profile.updates')->middleware('auth')->middleware('can:has_per,"update-profile"'); 




