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
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/changePassword',function(){
	return view('auth.changePassword');
});

Route::post('/changePassword','changePasswordController@store_pwd');

Route::get('/resetUserPassword/{user_id}','UserActivityController@resetUserPassword');

Route:: get('/displayHome','CommonActivityController@displayLandingPage');