<?php

use Illuminate\Http\Request;

//API routes 
Route::group(['namespace'=>"Api"],function(){

    Route::get('getAllPizza', 'PizzaController@getAll');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
