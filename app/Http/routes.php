<?php

Route::post('test', function(\Illuminate\Http\Request $request){
   dd($request->all());
});

Route::get('/', function(){

    dd(  DB::table('event_product_qty_cost')
        ->where('event_product_qty_cost.event_id', 9)
        ->where('event_product_qty_cost.pitch_id', 3)
        ->join('products', 'event_product_qty_cost.product_id', '=', 'products.id')
        ->get());


});
Route::get('event/{slug}', 'EventController@getShow');


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
    Route::resource('campsite', 'CampsiteController');
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