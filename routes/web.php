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

//Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('home', function() {
    return view('home');
});

//Auth
Auth::routes();

//About blood giving
Route::get('home#about','HomeController@index')->name('aboutbloodgiving');

//Users
Route::get('questionnaire','HomeController@questionnaire')->name('questionnaire');
Route::post('checkquestionnaire','HomeController@checkquestionnaire')->name('checkquestionnaire');
Route::get('wheredonate','HomeController@wheredonate')->name('wheredonate');
Route::get('searchtransfuziologydept','SearchController@index')->name('searchtransfuziology_dept');
Route::get('picadate/{trans_dept}','UsersController@pickadate')->name('pickadate');
Route::post('senddonationrequest/{trans_dept}','UsersController@sendrequest')->name('senddonationrequest');

Route::get('myprofile','UsersController@myprofile')->name('myProfile');
Route::put('myprofile/{user}','UsersController@updatemyprofile')->name('updateMyProfile');
Route::get('changePassword','UsersController@showChangePasswordForm')->name('showChangePasswordForm');
Route::post('changePassword','UsersController@changePassword')->name('changePassword');

Route::get('mydonorarrivals','UsersController@mydonorarrivalslog')->name('mydonorarrivals');
Route::get('mydonationrequests','UsersController@mydonationrequestslog')->name('mydonationrequests');
Route::put('mydonationrequests/{donation_request}/cancel','DonationRequestsController@cancel')->name('canceldonationrequest');

Route::prefix('transfuziologydept')->middleware('transfuziologydept')->group(function () {

    //Donation Requests
    Route::get('pendingdonationrequests','DonationRequestsController@pending_donation_requests')->name('pendingdonationrequests');
    Route::put('pendingdonationrequest/{donation_request}/approve','DonationRequestsController@approve')->name('approvedonationrequest');
    Route::put('pendingdonationrequest/{donation_request}/decline','DonationRequestsController@decline')->name('declinedonationrequest');
    Route::get('alldonationrequests','DonationRequestsController@all_donation_requests')->name('alldonationrequests');

    //Donor Arrivals
    Route::get('donorarrival/create','DonorArrivalsController@create')->name('createnewdonorarrival');
    Route::post('donorarrivals','DonorArrivalsController@store')->name('storenewdonorarrival');
    Route::get('alldonorarrivals','DonorArrivalsController@index')->name('alldonorarrivals');
    Route::get('alldonorarrivals/{donor_arrival}/edit','DonorArrivalsController@edit')->name('editdonorarrival');
    Route::put('alldonorarrivals/{donor_arrival}','DonorArrivalsController@update')->name('updatedonorarrival');
    Route::delete('alldonorarrival/{donor_arrival}','DonorArrivalsController@destroy');
    
    Route::get('bloodstatistics','DonorArrivalsController@statistics')->name('bloodstatistics');
    Route::get('searchdonorarrivals','SearchController@searchdonorindonorarrivals')->name('searchdonorindonorarrivals');


});

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('alldonors','AdminController@all_donors')->name('alldonors');

    Route::get('alldepts','AdminController@all_depts')->name('alldepts');
    Route::get('donor/create','AdminController@create_donor')->name('createdonor');
    Route::post('alldonors','AdminController@store_donor')->name('storedonor');
    Route::get('depts/create','AdminController@create_trans_dept')->name('createdept');
    Route::post('alldepts','AdminController@store_dept')->name('storedept');

    Route::get('alldonors/{donor}/edit','AdminController@edit_donor')->name('editdonor');
    Route::put('alldonors/{donor}','AdminController@update_donor')->name('updatedonor');
    Route::delete('alldonors/{donor}','AdminController@destroy_donor');

    Route::get('alldepts/{dept}/edit','AdminController@edit_dept')->name('editdept');
    Route::put('alldepts/{dept}','AdminController@update_dept')->name('updatetransdept');
    Route::delete('alldepts/{dept}','AdminController@destroy_dept');


});
