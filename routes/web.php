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
Route::get('/','BusController@index');
// End-User 

// Admin
Route::get('/dashboard','AdminController@index');
Route::get('/dashboard/bus','BusController@index');
Route::get('/dashboard/user','UserController@index');
// End-Admin

