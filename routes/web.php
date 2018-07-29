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
    Route::get('/{step?}','HostelRegistrationController@wizard')->name('hostel.registration')->middleware('chrp');

    /* Post routes*/
    Route::post('/{step}','HostelRegistrationController@wizardPost')->name('hostel.registration.submit');

});

});


/**************************************
 *  Hostels Route
 ***************************************/
Route::middleware('published')->group(function (){

    Route::get('/{hostelName?}','IndividualHostelController@showHostel')->name('hostel');
    Route::get('/{hostelName}/comments','CommentController@index');
    Route::put('/{hostelName}/comments','CommentController@update')->name('commentOnHostel');
    Route::get('/{hostelName}/booking','BookingController@index')->name('booking');
    Route::get('/{hostelName}/{room_token}','BookingController@roomTypeReservation');
});
