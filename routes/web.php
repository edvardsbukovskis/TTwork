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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anketa', 'AnketasController@index');
Route::get('/anketa/create','AnketasController@create');
Route::post('/anketa/create','AnketasController@store');
Route::get('/anketa/jautajums/{id}','AnketasController@showJautajumi');
Route::post('/anketa/atbildet/{id}', 'AnketasController@aizpildit');
Route::get('/anketa/createjaut/{id}', 'AnketasController@createJautajums');
Route::post('/anketa/createjaut/{id}', 'AnketasController@submitJautajums');
Route::get('/anketa/del/{id}','AnketasController@destroy');
Route::get('/anketa/update/{id}','AnketasController@edit');
Route::post('/anketa/update/{id}','AnketasController@update');
