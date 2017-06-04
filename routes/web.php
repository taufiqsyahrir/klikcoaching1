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

Route::get('/home', function () {
    return view('belajar/home');
});

Route::get('belajar/', 'BelajarController@index');
Route::get('belajar/create', 'BelajarController@createroom');

Route::get('belajar/createroom', 'BelajarController@createroom');
Route::post('belajar', 'BelajarController@storeroom');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
