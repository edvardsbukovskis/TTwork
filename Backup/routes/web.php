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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::redirect('/','country/');
Route::get('country/','CountryController@index');
Route::get('country/delete/{id}','CountryController@destroy');
Route::get('city/{id}','CityController@index');
Route::get('city/new/{id}','CityController@new');
Route::get('city/insert/{id}/{name}','CityController@store');
Route::get('city/update/{id}/{city_name}','CityController@update');
Route::get('city/update/{id}','CityController@edit');
Route::get('search/{country_name}','CountryController@search');
