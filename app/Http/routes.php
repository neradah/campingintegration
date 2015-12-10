<?php

Route::get('/', 'PageController@getHome');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/home', function(){
        return view('admin.home');
    });
    Route::resource('event', 'EventController');
    Route::resource('product', 'ProductController');
    Route::resource('booking', 'BookingController');
    Route::resource('pitch', 'PitchController');
    Route::resource('user', 'UserController');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');