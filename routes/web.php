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

Route::get('contact', 'ContactController@index')->name('contact');

Route::get('privacy-policy', 'PrivacyPolicyController@index')->name('privacy_policy');

Route::get('books', 'ContactPrivateController@index')->name('books');

Route::get('contact_info', 'ContactInfoController@contactInfo');
Route::post('contact_info/submit', 'ContactInfoController@contactInformationSubmit')->name('contactInfo_request');


Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image_upload_post');


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
    Route::resource('/cabinSpecifications', 'CabinSpecificationsController');
    Route::resource('/blocks', 'BlocksController');
    Route::resource('/sections', 'SectionsController');
    Route::resource('/partners', 'PartnersController');
    Route::resource('/contacts', 'ContactsController');
    Route::resource('/menus', 'MenusController');
    Route::resource('/menuLinks', 'MenuLinksController');
    Route::resource('/destinationBlocks', 'DestinationBlocksController');

    });






