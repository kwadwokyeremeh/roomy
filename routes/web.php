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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/*************
 ** Master Route
 *************/
Route::get('/','HomePageController@index');

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
    Route::get('/', 'Hosteller\HostellerController@index')->name('dashboard.hostel');

});

Route::get('/ll',function (){
    return view('dashboard.hostelmanager.index');
});
