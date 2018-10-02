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

use Illuminate\Support\Facades\Route;

/*************************
 * * Testing Routes
 ************************/
if(env('APP_ENV') == 'local'){

    Route::get('/ll', function (){
        dd(Route::middleware('published'));
    });
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

}


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
    Route::redirect('blog','/');
    Route::redirect('help','/');

});

/*********************
 ** User Routes
 *********************/
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
\Illuminate\Support\Facades\Auth::routes(['verify'=> true]);

Route::get('/user/', 'HomeController@index')->middleware('verified')->name('student');


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
    Route::get('/login', 'Hosteller\LoginController@showLoginForm')->middleware('throttle')->name('hosteller.login');
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
Route::middleware('hvs')->group(function (){
    Route::get('/', 'Hosteller\Dashboard\HostellerController@lockscreen')->name('dashboard.hostel');
    Route::get('/{hostelName}', 'Hosteller\Dashboard\HostellerController@index');
    Route::get('{hostelName}/reservationDate', 'Hosteller\Dashboard\HostellerController@reservationDate');
    Route::get('{hostelName}/editContent', 'Hosteller\Dashboard\HostellerController@editContent');
    Route::get('{hostelName}/color', 'Hosteller\Dashboard\HostellerController@color');
    Route::get('{hostelName}/roomSettings', 'Hosteller\Dashboard\HostellerController@roomSettings');
    Route::get('{hostelName}/paymentSettings', 'Hosteller\Dashboard\HostellerController@paymentSettings');
    Route::get('{hostelName}/occupants', 'Hosteller\Dashboard\HostellerController@occupants');
    Route::get('{hostelName}/allotABed', 'Hosteller\Dashboard\HostellerController@allotABed');
    Route::get('{hostelName}/vacateAnOccupant', 'Hosteller\Dashboard\HostellerController@vacateAnOccupant');
    Route::get('{hostelName}/changeOccupantRoom', 'Hosteller\Dashboard\HostellerController@changeOccupantRoom');
    Route::get('{hostelName}/paidList', 'Hosteller\Dashboard\HostellerController@paidList');
    Route::get('{hostelName}/reservedBedList', 'Hosteller\Dashboard\HostellerController@reservedBedList');
    Route::get('{hostelName}/r&c', 'Hosteller\Dashboard\HostellerController@reviewsAndComments');
    Route::get('{hostelName}/inbox', 'Hosteller\Dashboard\HostellerController@inbox');
    Route::get('{hostelName}/compose', 'Hosteller\Dashboard\HostellerController@compose');
    Route::get('{hostelName}/read', 'Hosteller\Dashboard\HostellerController@read');
    Route::get('{hostelName}/owner', 'Hosteller\Dashboard\HostellerController@owner');
    Route::get('{hostelName}/manager', 'Hosteller\Dashboard\HostellerController@manager');
    Route::get('{hostelName}/portal', 'Hosteller\Dashboard\HostellerController@portal');
    Route::get('{hostelName}/docs', 'Hosteller\Dashboard\HostellerController@docs');
    Route::get('{hostelName}/faqs', 'Hosteller\Dashboard\HostellerController@faqs');
    Route::get('{hostelName}/notice', 'Hosteller\Dashboard\HostellerController@notice');
    Route::get('{hostelName}/uploads', 'Hosteller\Dashboard\HostellerController@uploads');
    Route::get('{hostelName}/roomCancellationPolicy', 'Hosteller\Dashboard\HostellerController@roomCancellationPolicy');
    Route::get('{hostelName}/policy', 'Hosteller\Dashboard\HostellerController@policy');
    Route::get('{hostelName}/termsOfService', 'Hosteller\Dashboard\HostellerController@termOfService');
    Route::get('{hostelName}/archives', 'Hosteller\Dashboard\HostellerController@archives');
    Route::get('{hostelName}/addHostel', 'Hosteller\Dashboard\HostellerController@addHostel');

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
    //Route::get('/{hostelName}/booking','Booking\ReservationController@roomTypeReservation');
    Route::get('/{hostelName}/{room_token}','Booking\ReservationController@roomTypeReservation')->name('reservation');
    Route::post('/{hostelName}/{room_token}','Booking\ReservationController@saveProgress')->name('reserveRoom');
    Route::put('/{hostelName}/{room_token}','Booking\ReservationController@makePayment')->name('reserveRoom');
    Route::get('/{hostelName}/{room_token}/unreserve','Booking\ReservationController@unReserveBed')->name('unReserveBed');
    //Route::get('/{hostelName}/{room_token}/previousReservation','Booking\ReservationController@previousReservation')->name('previousReservation');
    Route::get('/{hostelName}/{room_token}/proceedToMakePayment','Booking\ReservationController@proceedToMakePayment')->name('proceedToMakePayment');
});





/*
 * These routes should always be last
 * i have discovered that these routes are not  necessary but it is still there
 * */

Route::get('/{error?}/{error1?}/{error2?}/{error3?}/{error4?}/{error5?}/{error6?}/{error7?}/{error8?}/{error9?}/{error10?}/{error11?}/{error12?}','ErrorController@error');
Route::domain('{error?}.'.env('APP_URL'))->group(function (){
    Route::get('/{error?}/{error1?}/{error2?}/{error3?}/{error4?}/{error5?}/{error6?}/{error7?}/{error8?}/{error9?}/{error10?}/{error11?}/{error12?}','ErrorController@error');
}) ;
