<?php



Route::get('/', function () {
    return view('welcome');
});

//Web routes 
Route::group(['namespace'=>"Web"],function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::match(['GET','POST'],'/addPizza','PizzaController@addPizza')->name('addPizza');
    Route::match(['GET','POST'],'/managePizza','PizzaController@managePizza')->name('managePizza');

    Route::match(['GET','POST'],'/viewOrders','OrderController@viewOrders')->name('viewOrders');
    Route::match(['GET','POST'],'/manageOrder/{id}','OrderController@manageOrder')->name('manageOrder');
    
});

Auth::routes();



