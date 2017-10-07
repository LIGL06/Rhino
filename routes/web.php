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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Resources
Route::resource('card','CardController');
Route::resource('checkin','CheckinController');
Route::resource('elder','ElderController');
Route::resource('office','OfficeController');
Route::resource('school','SchoolController');
Route::resource('student','StudentController');
Route::resource('user','UserController');
