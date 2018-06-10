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
Route::get('passwordreset',function (){
   return view('auth.passwords.reset');
});

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
 ** Manager's authentication
 *****************/
Route::prefix('manager')->group(function (){
    Route::get('/login', 'Manager\LoginController@showLoginForm')->name('manager.login');
    Route::get('/register', 'Manager\RegistrationController@showRegistrationForm')->name('manager.register');
    Route::post('/login', 'Manager\LoginController@authenticate')->name('manager.login.submit');
    Route::get('/', 'Manager\ManagerController@index')->name('manager.dashboard');

});
