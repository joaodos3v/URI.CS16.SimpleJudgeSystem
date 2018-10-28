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

Route::get('/',             ['as' => 'dashboard', 		'uses' => 'DashboardController@index']);

// Ajax 
Route::get('dashboard/system-data',         'AjaxController@getSystemData');
Route::get('enviar/{id}/get-language',      'AjaxController@getLanguage');
Route::post('enviar/codigo',                'AjaxController@submit');

// Dashboard
Route::group(['prefix' => 'dashboard'], function() {
    Route::get('',          ['as' => 'dashboard', 		'uses' => 'DashboardController@index']);
});

// Enviar
Route::group(['prefix' => 'enviar'], function() {
    Route::get('',          ['as' => 'enviar', 		'uses' => 'EnviarController@index']);
});

// Submissões
Route::group(['prefix' => 'submissoes'], function() {
    Route::get('',          ['as' => 'submissoes', 		'uses' => 'SubmissoesController@index']);
});
