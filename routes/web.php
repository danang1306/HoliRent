<?php

use Illuminate\Support\Facades\Route;

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
// User
Route::get('/',function(){
    echo "Tambahkan /adminpanel di URL";
});
// End-User

// Admin

Route::get('adminpanel','AdminController@index')->name('dashboard.login');

Route::get('register','RegisterController@view')->name('register.user');
Route::post('store','RegisterController@store')->name('register.user.store');

Route::prefix('dashboard')->middleware('check-login','check-admin')->group(function(){
    Route::get('','AdminController@dashboard')->name('dashboard');
    Route::post('action','AdminController@check')->name('dashboard.login.action')->withoutMiddleware('check-login','check-admin');
    Route::get('logout','AdminController@logout')->name('dashboard.logout')->withoutMiddleware('check-login','check-admin');

    // Bus
    Route::get('bus','BusController@index')->name('dashboard.bus');
    Route::post('bus','BusController@store')->name('user.store');
    Route::get('bus/delete/{id}','BusController@destroy');
    // End-Bus

    // User
    Route::get('user','UserController@index')->name('dashboard.user');
    Route::post('user','UserController@store')->name('user.store');
    Route::get('user/delete/{id}','UserController@destroy');
    Route::get('user/edit/{user}','UserController@edit');
    Route::patch('user/edit/{user}','UserController@update');
    // End-User
});
// End-Admin

