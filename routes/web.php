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
    Route::get('/insert', 'DesignController@insert');
});

Route::group(['prefix'=>'kasir'], function () {
    Route::get('/data', 'KasirController@getData');
    Route::get('/process', 'KasirController@getProcess');
});