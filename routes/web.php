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
/*Route::get('/ll',function (){
     phpinfo();
});*/
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



    /*********************************
     *  Hosteller's Dashboard
     *********************************/

    Route::get('/', 'Hosteller\HostellerController@lockscreen')->name('dashboard.hostel')->middleware('hvs');
    Route::get('/{hostelName}', 'Hosteller\HostellerController@index')->middleware('hvs');
    Route::get('{hostelName}/reservationDate', 'Hosteller\HostellerController@reservationDate')->middleware('hvs');
    Route::get('{hostelName}/editContent', 'Hosteller\HostellerController@editContent')->middleware('hvs');
    Route::get('{hostelName}/color', 'Hosteller\HostellerController@color')->middleware('hvs');
    Route::get('{hostelName}/roomSettings', 'Hosteller\HostellerController@roomSettings')->middleware('hvs');
    Route::get('{hostelName}/paymentSettings', 'Hosteller\HostellerController@paymentSettings')->middleware('hvs');
    Route::get('{hostelName}/occupants', 'Hosteller\HostellerController@occupants')->middleware('hvs');
    Route::get('{hostelName}/allotABed', 'Hosteller\HostellerController@allotABed')->middleware('hvs');
    Route::get('{hostelName}/vacateAnOccupant', 'Hosteller\HostellerController@vacateAnOccupant')->middleware('hvs');
    Route::get('{hostelName}/changeOccupantRoom', 'Hosteller\HostellerController@changeOccupantRoom')->middleware('hvs');
    Route::get('{hostelName}/paidList', 'Hosteller\HostellerController@paidList')->middleware('hvs');
    Route::get('{hostelName}/reservedBedList', 'Hosteller\HostellerController@reservedBedList')->middleware('hvs');
    Route::get('{hostelName}/r&c', 'Hosteller\HostellerController@reviewsAndComments')->middleware('hvs');
    Route::get('{hostelName}/inbox', 'Hosteller\HostellerController@inbox')->middleware('hvs');
    Route::get('{hostelName}/compose', 'Hosteller\HostellerController@compose')->middleware('hvs');
    Route::get('{hostelName}/read', 'Hosteller\HostellerController@read')->middleware('hvs');
    Route::get('{hostelName}/owner', 'Hosteller\HostellerController@owner')->middleware('hvs');
    Route::get('{hostelName}/manager', 'Hosteller\HostellerController@manager')->middleware('hvs');
    Route::get('{hostelName}/portal', 'Hosteller\HostellerController@portal')->middleware('hvs');
    Route::get('{hostelName}/docs', 'Hosteller\HostellerController@docs')->middleware('hvs');
    Route::get('{hostelName}/faqs', 'Hosteller\HostellerController@faqs')->middleware('hvs');
    Route::get('{hostelName}/notice', 'Hosteller\HostellerController@notice')->middleware('hvs');
    Route::get('{hostelName}/uploads', 'Hosteller\HostellerController@uploads')->middleware('hvs');
    Route::get('{hostelName}/roomCancellationPolicy', 'Hosteller\HostellerController@roomCancellationPolicy')->middleware('hvs');
    Route::get('{hostelName}/policy', 'Hosteller\HostellerController@policy')->middleware('hvs');
    Route::get('{hostelName}/termsOfService', 'Hosteller\HostellerController@termOfService')->middleware('hvs');
    Route::get('{hostelName}/archives', 'Hosteller\HostellerController@archives')->middleware('hvs');
    Route::get('{hostelName}/addHostel', 'Hosteller\HostellerController@addHostel')->middleware('hvs');


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
    //Route::get('/{hostelName}/booking','Booking\ReservationController@roomTypeReservation');
    Route::get('/{hostelName}/{room_token}','Booking\ReservationController@roomTypeReservation')->name('reservation');
    Route::post('/{hostelName}/{room_token}','Booking\ReservationController@saveProgress')->name('reserveRoom');
    Route::put('/{hostelName}/{room_token}','Booking\ReservationController@makePayment')->name('reserveRoom');
});
