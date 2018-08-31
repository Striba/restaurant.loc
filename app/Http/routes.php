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

//Route::resource('{alias}', 'DishesController');
Route::resource('dishes', 'DishesController',
                                        ['parameters' =>
                                            ['dishes' => 'alias']
                                        ]);

Route::group(['prefix' => 'reserve', 'middleware' => 'auth'], function (){

    Route::get('/add/{id}', [ 'uses' => 'ReserveController@add', 'as' => 'reserveAdd']);
    Route::get('/clear', [ 'uses' => 'ReserveController@clear', 'as' => 'reserveClear']);
    Route::get('/delete/{id?}', [ 'uses' => 'ReserveController@delete', 'as' => 'reserveDel']);
    Route::get('/order', [ 'uses' => 'ReserveController@order', 'as' => 'reserveOrder']);

});

Route::resource('reserve', 'ReserveController');

//Route::resource('drinks', 'DrinksController',
//                                                        ['parameters' => ['drinks' => 'alias'],
//
//]);
//
//Route::resource('first_dishes', 'FdishesController',
//                                                    ['parameters' => ['first_dishes' => 'alias'],
//
//]);
//
//Route::resource('breakfasts', 'BreakfastsController',
//                                                    ['parameters' => ['breakfasts' => 'alias'],
//
//]);
//
//Route::resource('desserts', 'DessertsController',
//                                                    ['parameters' => ['desserts' => 'alias'],
//
//]);

Route::resource('/', 'IndexController', [
    'names' => [
        'index' => 'home'
    ],
                                                              'parameters' => ['' => 'id']

]);

//Route::resource('/', 'IndexController', [
//    'names' => [
//        'index' => 'home'
//    ],
//    'parameters' => ['' => 'id.alias']
//
//]);

//Route::resource('{id?}.{alias?}/', 'IndexController', [
//    'names' => [
//        'index' => 'home'
//    ],
//    //'parameters' => ['' => 'id.alias']
//
//]);


//Route::resource('/', 'IndexController', [
//                                                              'names' => [
//                                                                     'index' => 'home'
//                                                                         ],
//                                                              'parameters' => ['' => 'alias']
//]);


//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    //admin
    Route::get('/', ['uses' => 'Admin\IndexController@index',
                            'as' => 'adminIndex'
    ]);

    Route::resource('/desserts', 'Admin\DessertsController');

});

Route::auth();

