<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('dishes/{alias}', ['as' => 'dishes.index', 'uses' => 'DishesController@index']);

Route::resource('dishes', 'DishesController', ['except' => ['index']]);

Route::group(['prefix' => 'reserve', 'middleware' => 'auth'], function (){

    Route::get('/add/{id}', [ 'uses' => 'ReserveController@add', 'as' => 'reserveAdd']);
    Route::get('/clear', [ 'uses' => 'ReserveController@clear', 'as' => 'reserveClear']);
    Route::get('/delete/{id?}', [ 'uses' => 'ReserveController@delete', 'as' => 'reserveDel']);
    Route::get('/order', [ 'uses' => 'ReserveController@order', 'as' => 'reserveOrder']);

});

Route::resource('reserve', 'ReserveController');


//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    //admin
    Route::get('/{id}', ['uses' => 'Admin\IndexController@index',
                            'as' => 'adminIndex'
    ]);

    Route::resource('/desserts', 'Admin\DessertsController');

});

Route::auth();


Route::resource('/', 'IndexController', [
    'names' => [
        'index' => 'home'
    ],
    'parameters' => ['' => 'id']

]);

