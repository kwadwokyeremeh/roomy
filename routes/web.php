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


/*************************
 * * Testing Routes
 ************************/
Route::get('/ll',function (){
    return view('dashboard.student.index');
});
/*************************
 * * Testing Routes
 ************************/


Auth::routes();

Route::get('/student', 'HomeController@index')->name('student');




/*************
 ** Master Route
 *************/
Route::get('/','HomePageController@index')->name('home');

Route::prefix('knust')->group(function (){

    Route::get('hostels','GeneralHostelsController@index');
    Route::get('search','SearchResultsController@index');

});

/*****************
 ** Hosteller's Login and Registration routes
 *****************/
Route::prefix('hosteller')->group(function (){
    Route::get('/login', 'Hosteller\LoginController@showLoginForm')->name('hosteller.login');
    Route::post('/login', 'Hosteller\LoginController@authenticate')->name('hosteller.login.submit');
    Route::get('/register', 'Hosteller\RegistrationController@showRegistrationForm')->name('hosteller.register');
    Route::post('/register', 'Hosteller\RegistrationController@register')->name('hosteller.register.submit');

    Route::post('/', 'Hosteller\LoginController@destroy')->name('hosteller.logout');


    /*********************************
     *  Hosteller's Dashboard
     *********************************/

    Route::get('/', 'Hosteller\HostellerController@index')->name('dashboard.hostel')->middleware('hvs');



/***********************************
     * Hostellers Password reset routes
     ***************************** */
Route::post('password/email','Hosteller\ForgotPasswordController@sendResetLinkEmail')->name('hosteller.password.email');
Route::get('password/reset','Hosteller\ForgotPasswordController@showLinkRequestForm')->name('hosteller.password.request');
Route::post('password/reset','Hosteller\ResetPasswordController@reset')->name('hosteller.password.submit');
Route::get('password/reset/{token}','Hosteller\ResetPasswordController@showResetForm')->name('hosteller.password.reset');


/*********************************************
 *  Hostel Registration wizard routes
 **********************************************/
Route::prefix('hostelRegistration')->group(function (){



    /* Get routes*/
    Route::get('/{step?}','HostelRegistrationController@wizard')->name('hostel.registration');
   /* Route::get('/02','HostelRegistrationController@showHostelDetails')->name('hostel.registration.02');
    Route::get('/03','HostelRegistrationController@showAddMedia')->name('hostel.registration.03');
    Route::get('/04','HostelRegistrationController@showAmenities')->name('hostel.registration.04');
    Route::get('/05','HostelRegistrationController@showLayoutAndPricing')->name('hostel.registration.05');
    Route::get('/06','HostelRegistrationController@showPolicies')->name('hostel.registration.06');
    Route::get('/07','HostelRegistrationController@showPaymentProtocols')->name('hostel.registration.07');
    Route::get('/08','HostelRegistrationController@showConfirmation')->name('hostel.registration.08');*/

    /* Post routes*/
    Route::post('/{step}','HostelRegistrationController@wizardPost')->name('hostel.registration.submit');
   /* Route::post('/02','HostelRegistrationController@storeHostelDetails')->name('hostel.registration.02.submit');
    Route::post('/03','HostelRegistrationController@storeAddMedia')->name('hostel.registration.03.submit');
    Route::post('/04','HostelRegistrationController@storeAmenities')->name('hostel.registration.04.submit');
    Route::post('/05','HostelRegistrationController@storeLayoutAndPricing')->name('hostel.registration.05.submit');
    Route::post('/06','HostelRegistrationController@storePolicies')->name('hostel.registration.06.submit');
    Route::post('/07','HostelRegistrationController@storePaymentProtocols')->name('hostel.registration.07.submit');
    Route::post('/08','HostelRegistrationController@storeConfirmation')->name('hostel.registration.08.submit');*/

});



});

