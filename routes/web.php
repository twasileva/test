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
  Route::post('submit', ['as' => 'list.submit', 'uses'=> 'Controller@submit']);   

  Route::get('show', ['as' => 'list.show', 'uses' => 'Controller@show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
