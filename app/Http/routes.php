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

Route::get('/', function () {
    return view('utama');
});

// Route::get('/', 'HomeController@welcome');
Route::auth();
Route::get('/skripsi', 'SkripsiController@index');
Route::get('skripsi', ['as'=>'skripsi', 'uses'=>'SkripsiController@skripsi']);
Route::post('skripsi/store', ['as'=>'skripsi.store', 'uses'=>'SkripsiController@store']);
Route::get('skripsi/edit/{id}', ['as'=>'skripsi.edit', 'uses'=>'SkripsiController@edit']);
Route::post('skripsi/update/{id}', ['as' => 'skripsi.update', 'uses' => 'SkripsiController@update']);
Route::post('skripsi/delete/{id}', ['as'=>'skripsi.destroy', 'uses'=>'SkripsiController@destroy']);


// Route::get('/home', 'HomeController@index');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

// Route::get('customer', 'CustomerController@index');
