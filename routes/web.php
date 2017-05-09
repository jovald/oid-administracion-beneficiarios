<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'UserController@getLogin',
    'as' => 'user.login'
]);

Route::group(['prefix' => '/medica'], function (){

    Route::group(['prefix' => '/ficha-evaluacion-inicial'], function (){

        Route::group(['prefix' => '/kinesiologia'], function (){

            Route::get('/ingresar', [
                'uses' => 'IngresoKinesiologiaController@getIngresar',
                'as' => 'medica.ficha-evaluacion-inicial.kinesiologia.ingresar'
            ]);

            Route::post('/ingreso-kinesiologia', [
                'uses' => 'IngresoKinesiologiaController@postIngresar',
                'as' => 'medica.ficha-evaluacion-inicial.kinesiologia.ingresar'
            ]);
        });
    });
});
