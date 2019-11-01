<?php



Route::get('/', function () {
    return view('welcome');
});

//Web routes 
Route::group(['namespace'=>"Web"],function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::match(['GET','POST'],'/addPizza','PizzaController@addPizza')->name('addPizza');
    Route::get('/managePizza','PizzaController@managePizza')->name('managePizza');
    Route::get('/getPizza/{id}','PizzaController@getPizza')->name('getPizza');
    Route::post('/updatePizza','PizzaController@updatePizza')->name('updatePizza');
    Route::post('/deletePizza','PizzaController@deletePizza')->name('deletePizza');

    Route::match(['GET','POST'],'/viewOrders','OrderController@viewOrders')->name('viewOrders');
    Route::get('/viewOrder/{order_code}','OrderController@viewOrder')->name('viewOrder');
    Route::post('/deleteOrder','OrderController@deleteOrder')->name('deleteOrder');
    Route::post('/deliverOrder','OrderController@markDelievered')->name('markDelievered');
    
    Route::match(['GET','POST'],'/manageOrder/{id}','OrderController@manageOrder')->name('manageOrder');
    
});

Auth::routes();



