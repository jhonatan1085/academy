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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'alumno'],function(){
    Route::get('/',['as'=>'alumno.index','uses'=>'AlumnoController@index']);
    Route::get('create',['as'=>'alumno.create','uses'=>'AlumnoController@create']);
    Route::post('create',['as'=>'alumno.store','uses'=>'AlumnoController@store']);
    Route::get('edit/{id}',['as'=>'alumno.edit','uses'=>'AlumnoController@edit']);
    Route::post('edit/{id}',['as'=>'alumno.update','uses'=>'AlumnoController@update']);
    Route::get('delete/{id}',['as'=>'alumno.delete','uses'=>'AlumnoController@delete']);
});

Route::group(['prefix'=>'information'],function(){
    Route::get('/',['as'=>'information.index','uses'=>'InformationController@index']);
    Route::get('create',['as'=>'information.create','uses'=>'InformationController@create']);
    Route::post('create',['as'=>'information.store','uses'=>'InformationController@store']);
    Route::get('edit/{id}',['as'=>'information.edit','uses'=>'InformationController@edit']);
    Route::post('edit/{id}',['as'=>'information.update','uses'=>'InformationController@update']);
    Route::get('delete/{id}',['as'=>'information.delete','uses'=>'InformationController@delete']);
});
