<?php

use Illuminate\Http\Request;

//API routes 
Route::group(['namespace'=>"Api"],function(){

    Route::get('getAllPizza', 'PizzaController@getAllPizza');
    Route::get('getOnePizza/{id}', 'PizzaController@getOnePizza');

});

//Auth routes 
Route::group(['namespace'=>"Auth"],function(){

    Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');

});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
