<?php




Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/home', function(){
        return view('admin.home');
    });


    Route::resource('event', 'EventController');
    Route::resource('product', 'ProductController');
    Route::resource('booking', 'BookingController');
    Route::resource('pitch', 'PitchController');
    Route::resource('user', 'UserController');
    Route::resource('zone', 'ZoneController');
    Route::resource('campsite', 'CampSiteController');
    Route::resource('tent', 'TentController');
    Route::resource('category', 'CategoryController');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/faqs', function(){
    return view('pages.faqs');
});

Route::get('/how-to', function(){
    return view('pages.how-to');
});




Route::get('events', 'PageController@events');
Route::get('event/{slug}', ['as' => 'events.show', 'uses' => 'PageController@getShow']);
Route::get('event/{slug}/step1', ['as' => 'booking.step1', 'uses' => 'BookingController@step1']);
Route::get('/', 'HomeController@index');