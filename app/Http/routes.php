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

Route::auth();
Route::group(['middleware'=>'auth'], function(){
	Route::get('/', 'HomeController@index');
	Route::resource('data','DataController');
	Route::resource('harga','HargaController');
	Route::resource('bbm','BBMController');
	Route::resource('warna','WarnaController');
	Route::resource('cc','CCController');
	Route::get('hasil',['as'=>'hasil.index','uses'=>'HasilController@index']);
});

