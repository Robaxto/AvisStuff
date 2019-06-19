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

Route::get('/reservations', 'reservationsController@index');

Route::get('/reservations/available', 'reservationsController@availableCat');

Route::get('/saludar/{name}', 'PeopleController@sayHi');

Route::get('/saludar', 'PeopleController@index');

Route::get('/categories', 'CategoriesController@index');

Route::get('/cars/create', 'carscontroller@create');

Route::post('/cars', 'carscontroller@store');

['uses' => 'carscontroller@create', 'as' => 'cars.create'];

['uses' => 'carscontroller@create', 'as' => 'cars.store'];
