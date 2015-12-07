<?php

Route::get('/', 'PageController@getHome');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::resource('event', 'EventController');

});