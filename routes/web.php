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
     phpinfo();
});
/*************************
 * * Testing Routes
 ************************/


/*************
 ** Master Route
 *************/
Route::get('/','HomePageController@index')->name('home');

Route::prefix('knust')->group(function (){

    Route::get('hostels','GeneralHostelsController@index')->name('allHostels');
    Route::get('search','SearchResultsController@index')->name('search');

});

/*********************
 ** User Routes
 *********************/
Auth::routes();

Route::get('/user/', 'HomeController@index')->name('student');


/**************************
 * *
 * * User Socialite
 * **********************/
    Route::get('/login/{provider}','Auth\UserSocialAccountController@redirectToProvider');
    Route::get('/login/{provider}/callback','Auth\UserSocialAccountController@handleProviderCallback');


/*****************
 ** Hosteller's Login and Registration routes
 *****************/
Route::prefix('hosteller')->group(function (){
    Route::get('/login', 'Hosteller\LoginController@showLoginForm')->name('hosteller.login');
    Route::post('/login', 'Hosteller\LoginController@authenticate')->name('hosteller.login.submit');
    Route::get('/register', 'Hosteller\RegistrationController@showRegistrationForm')->name('hosteller.register');
    Route::post('/register', 'Hosteller\RegistrationController@register')->name('hosteller.register.submit');

    Route::post('/', 'Hosteller\LoginController@destroy')->name('hosteller.logout');


    /**************************
     * *
     * * User Socialite
     * **********************/
    Route::get('/login/{provider}','Hosteller\HostellerSocialAccountController@redirectToProvider');
    Route::get('/login/{provider}/callback','Hosteller\HostellerSocialAccountController@handleProviderCallback');


    /*********************************
     *  Hosteller's Dashboard
     *********************************/

    Route::get('/', 'Hosteller\HostellerController@index')->name('dashboard.hostel')->middleware('hvs');
    Route::get('/reservationDate', 'Hosteller\HostellerController@reservationDate')->middleware('hvs');



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

    Route::get('/{step?}','HostelRegistrationController@wizard')->name('hostel.registration')->middleware('chrp');
    Route::get('/05','HostelRegistrationController@wizard')->name('hostel.registration.layout');
    /* Post routes*/
    Route::post('/{step}','HostelRegistrationController@wizardPost')->name('hostel.registration.submit');

});

});


/**************************************
 *  Hostels Routes
 ***************************************/
Route::middleware('published')->group(function (){

    Route::get('/{hostelName?}','IndividualHostelController@showHostel')->name('hostel');

    // Hostel comments
    Route::get('/{hostelName}/comments','CommentController@index');
    Route::put('/{hostelName}/comments','CommentController@update')->name('commentOnHostel');

    // Hostel booking
    Route::get('/{hostelName}/booking','Booking\ReservationController@index')->name('reservation');
    Route::get('/{hostelName}/booking/payment','Booking\ReservationController@makePayment');
    Route::get('/{hostelName}/booking/selectRoom','Booking\ReservationController@selectRoom');
    Route::get('/{hostelName}/booking/confirmation','Booking\ReservationController@confirmation');
    Route::get('/{hostelName}/{room_token}','Booking\ReservationController@roomTypeReservation');
    Route::post('/{hostelName}/{room_token}','Booking\ReservationController@saveProgress')->name('reserveRoom');
});
