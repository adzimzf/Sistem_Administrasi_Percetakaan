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

Route::get('/home', function (){
    return view('home');
});

Route::group(['prefix'=>'designer'], function () {
    Route::get('/insert', 'DesignController@index');
    Route::post('/insert', 'DesignController@insert');
});

Route::group(['prefix'=>'kasir'], function () {
    Route::get('data',             'KasirController@getData');
    Route::get("data/ajax",        'KasirController@getAjax');
    Route::get('process/{id}',     'KasirController@getProcess');
    Route::get('detail/{id}',      'KasirController@getDetail');
    Route::post('setharga',        'KasirController@setHarga');
});

Route::group(['prefix'=>'operator'], function () {
    Route::get('data',             'OperatorController@getData');
    Route::get("data/ajax",        'OperatorController@getAjax');
    Route::get("process/{id}",     'OperatorController@getProcess');
    Route::get("process/setDone/ajax",     'OperatorController@setDone');
});