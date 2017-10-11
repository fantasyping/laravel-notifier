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

<<<<<<< HEAD
 Auth::routes();
  
  
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');
  
=======
// Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index'])->name;
>>>>>>> 8f2a466ec131a807a8afde55d4a499db6ef685c8

Route::group(['middleware' => 'auth'], function () {
  	
  	Route::get('/alert/new', [
  		'as' => 'create', 
  		'uses' => 'AlertController@create'
  	]);

<<<<<<< HEAD
});
=======

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 8f2a466ec131a807a8afde55d4a499db6ef685c8
