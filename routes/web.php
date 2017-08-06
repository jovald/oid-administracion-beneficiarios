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


Route::group(['prefix' => 'areasocial'], function(){
    Route::get('/asistentesocial', [
    'uses' => 'FichaSocialController@index',
    'as' => 'social.asistenteSocialGet'
    ]);

    Route::get('/asistentesocial/menu', [
    'uses' => 'FichaSocialController@show',
    'as' => 'social.asistenteSocial'
    ]);   


    Route::post('/asistentesocial/menu',[
    'uses' => 'FichaSocialController@post',
    'as' => 'social.asistentesocial'
    ]);
});

/*

Route::group(['prefix' => '/medica'], function (){
*/
Route::group(['prefix' => '/area-medica'], function (){


    Route::group(['prefix' => '/ficha-evaluacion-inicial'], function (){

        Route::group(['prefix' => '/kinesiologia'], function (){

            Route::get('/create/{id}', [
                'uses' => 'FichaKinesiologiaController@create',
                'as' => 'area-medica.ficha-evaluacion-inicial.kinesiologia.create'
            ]);

            Route::post('/store', [
                'uses' => 'FichaKinesiologiaController@store',
                'as' => 'area-medica.ficha-evaluacion-inicial.kinesiologia.store'
            ]);
        });

        Route::group(['prefix' => '/fonoaudiologia'], function (){

            Route::get('/create/{id}', [
                'uses' => 'FichaFonoaudiologiaController@create',
                'as' => 'area-medica.ficha-evaluacion-inicial.fonoaudiologia.create'
            ]);

            Route::post('/postfono', [
                'uses' => 'FichaFonoaudiologiaController@postFono',
                'as' => 'area-medica.ficha-evaluacion-inicial.fonoaudiologia.postfono'
            ]);

            Route::post('/agregarpariente', [
                'uses' => 'FichaFonoaudiologiaController@postAgregarPariente',
                'as' => 'area-medica.ficha-evaluacion-inicial.fonoaudiologia.agregarpariente'
            ]);

        });

        Route::group(['prefix' => '/terapia-ocupacional'], function (){

            Route::get('/ingresar/{id}', [
                'uses' => 'FichaTerapiaOcupacionalController@getIngresar',
                'as' => 'area-medica.ficha-evaluacion-inicial.terapia-ocupacional.ingresar'
            ]);

            Route::post('/ingresar', [
                'uses' => 'FichaTerapiaOcupacionalController@postIngresar',
                'as' => 'area-medica.ficha-evaluacion-inicial.terapia-ocupacional.ingresar'
            ]);

            Route::get('/mostrar-lista', [
                'uses' => 'FichaTerapiaOcupacionalController@getMostrarLista',
                'as' => 'area-medica.ficha-evaluacion-inicial.terapia-ocupacional.mostrar-lista'
            ]);
        });

        Route::group(['prefix' => '/psicologia'], function (){

            Route::get('/create/{id}', [
                'uses' => 'FichaPsicologiaController@create',
                'as' => 'area-medica.ficha-evaluacion-inicial.psicologia.create'
            ]);

            Route::post('/store', [
                'uses' => 'FichaPsicologiaController@store',
                'as' => 'area-medica.ficha-evaluacion-inicial.psicologia.store'
            ]);
        });
    });
});



Route::group(['prefix' => 'beneficiario'], function () {
    Route::get('/registrar', [
        'uses' => 'BeneficiarioController@create',
        'as' => 'beneficiario.create'
    ]);

    Route::post('/registrar', [
        'uses' => 'BeneficiarioController@store',
        'as' => 'beneficiario.store'
    ]);

    Route::get('/editar/{id}', [
        'uses' => 'BeneficiarioController@edit',
        'as' => 'beneficiario.edit'
    ]);

    Route::post('/editar', [
        'uses' => 'BeneficiarioController@update',
        'as' => 'beneficiario.update'
    ]);

    Route::get('/informacion/{id}', [
        'uses' => 'BeneficiarioController@show',
        'as' => 'beneficiario.show'
    ]);

    Route::get('/buscar', [
        'uses' => 'BeneficiarioController@find',
        'as' => 'beneficiario.find'
    ]);

    Route::get('/buscar-json', [
        'uses' => 'BeneficiarioController@findLikeNombreApellidoRutJson',
        'as' => 'beneficiario.findLikeNombreApellidoRutJson'
    ]);
});

Route::group(['prefix' => 'reportabilidad'], function(){
    Route::get('/createFichaPaciente', [
        'uses' => 'ReportabilidadController@show',
        'as' => 'reportabilidad.createFichaPaciente'
    ]);

    Route::get('/showEstadistica', [
//<<<<<<< HEAD
        'uses' => 'ReportabilidadController@showResults',
        'as' => 'reportabilidad.showEstadistica'
    ]);

    Route::get('/menuReportabilidad', [
        'uses' => 'ReportabilidadController@index',
        'as' => 'reportabilidad.menu'
    ]);

    Route::get('/reporteGeneralOID.pdf', [
        'uses' => 'PdfController@invoice',
        'as' => 'reportabilidad.reporteGeneral'
    ]);

    Route::get('/reporteKinesiologia.pdf', [
        'uses' => 'PdfController@invoice1',
        'as' => 'reportabilidad.reporteKine'
    ]);

    Route::get('/reportePsicologia.pdf', [
        'uses' => 'PdfController@invoice2',
        'as' => 'reportabilidad.reportePsico'
    ]);

    Route::get('/reporteTerapOcupacional.pdf', [
        'uses' => 'PdfController@invoice3',
        'as' => 'reportabilidad.reporteTer'
    ]);

    Route::get('/reporteSocial.pdf', [
        'uses' => 'PdfController@invoice4',
        'as' => 'reportabilidad.reporteSoc'
    ]);

    Route::get('/reporteGrupal.pdf', [
        'uses' => 'PdfController@invoice5',
        'as' => 'reportabilidad.reporteGru'
    ]);

    Route::get('/menu', [
    'uses' => 'ReportabilidadController@index',
    'as' => 'reportabilidad.menuReportabilidad'
    ]); 

    Route::get('/reportabilidadKinesiologia',[
    'uses'=>'ReportabilidadController@showResultKine',
    'as' => 'reportabilidad.reportabilidadKine'
    ]); 

    Route::get('/reportabilidadPsiclogia',[
    'uses'=>'ReportabilidadController@showResultPsico',
    'as' => 'reportabilidad.reportabilidadPsico'
    ]);

    Route::get('/reportabilidadTerapiaOcupacional',[
    'uses'=>'ReportabilidadController@showResultTer',
    'as' => 'reportabilidad.reportabilidadTer'
    ]); 

    Route::get('/reportabilidadAtencionSocial',[
    'uses'=>'ReportabilidadController@showResultSoc',
    'as' => 'reportabilidad.reportabilidadSoc'
    ]); 

    Route::get('/reportabilidadGrupal',[
    'uses'=>'ReportabilidadController@showResultGrupal',
    'as' => 'reportabilidad.reportabilidadGru'
    ]);   

});
/*
Route::group(['prefix' => '/docs'], function(){

    Route::get('/pdf', [
        'uses' => 'PdfController@invoice',
        'as' => 'pdf'
    ]);

});

*/