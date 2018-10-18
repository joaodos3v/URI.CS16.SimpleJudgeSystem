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
Route::get('dashboard/system-data', 'AjaxController@getSystemData');

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('',          ['as' => 'dashboard', 		'uses' => 'DashboardController@index']);
});


Route::get('/enviar', function () {
    return view('enviar');
})->name('enviar');

Route::get('/submissoes', function () {
    return view('submissoes');
})->name('submissoes');
