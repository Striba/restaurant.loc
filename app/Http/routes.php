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



Route::resource('/', 'IndexController', ['only' => ['index'],
                                                        'names' => [
                                                            'index' => 'home'
                                                        ]
]);

Route::auth();

Route::get('/home', 'HomeController@index');

//admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    //admin
    Route::get('/', ['uses' => 'Admin\IndexController@index',
                            'as' => 'adminIndex'
    ]);

    Route::resource('/desserts', 'Admin\DessertsController');

});
