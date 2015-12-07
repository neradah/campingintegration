<?php

Route::get('/', 'PageController@getHome');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/home', function(){
        return view('admin.home');
    });
    Route::resource('event', 'EventController');

});