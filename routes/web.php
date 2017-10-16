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

 Auth::routes();
  
  
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');


Route::group(['middleware' => 'auth'], function () {
  	
  	Route::get('/new/model', [
  		'as' => 'selectModel', 
  		'uses' => 'AlertController@modelList'
  	]);

  	Route::get('/new/1/create', [
  		'as' => 'createAlert', 
  		'uses' => 'AlertController@create'
  	]);
  	Route::get('/new/2/create', [
  		'as' => 'createAlert', 
  		'uses' => 'AlertController@createSecond'
  	]);
});

