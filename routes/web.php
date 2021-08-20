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

Route::get('/', 'HomeController@index');
Route::post('/submit', 'FormController@requestQuotes')->name('request_quotes');

Route::get('jets', 'JetsController@index');
Route::get('jets/{slug}', 'JetsController@show')->name('show_jet');

Route::get('pages/destinations', 'DestinationsController@index');
Route::get('pages/destinations/{slug?}', 'DestinationsController@show')->name('show_destination');

Route::get('pages/{slug}', 'PagesController@getPage');

//Route::get('contacts', 'PagesController@contacts');

