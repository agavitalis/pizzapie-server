<?php

use Illuminate\Http\Request;

//API routes 
Route::group(['namespace'=>"Api"],function(){

    Route::get('getAllPizza', 'PizzaController@getAllPizza');
    Route::get('getOnePizza/{id}', 'PizzaController@getOnePizza');

    Route::post('checkOut', 'OrderController@checkOut');

});

//API Auth routes 
Route::post('register', 'Auth\RegisterController@register');
Route::post('register', 'Auth\LoginController@login');





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
