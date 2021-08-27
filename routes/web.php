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
Route::post('/subscribe', 'FormController@subscribeRequest')->name('subscribe_request');

Route::get('jets', 'JetsController@index');
Route::get('jets/{slug}', 'JetsController@show')->name('show_jet');

Route::get('destinations', 'DestinationsController@index');
Route::get('destinations/{slug?}', 'DestinationsController@show')->name('show_destination');

Route::post('contact/submit', 'FormController@contactRequest')->name('contact_request');

Route::get('pages/{slug}', 'PagesController@getPage');







Auth::routes();



    Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function () {
    Route::get('/logout', function() {
        auth()->logout();
    });

    Route::get('/', 'DashboardController@dashboard');
    Route::resource('/pages', 'PagesController');
    Route::resource('/jets', 'JetsController');
    Route::resource('/destinations', 'DestinationsController');
    Route::resource('/countries', 'CountriesController');
    Route::resource('/continents', 'ContinentController');

    });




//Route::get('contacts', 'PagesController@contacts');


