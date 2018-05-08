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
    return view('index');
})->name('index');

Route::get('/','UserController@index')->name('home');
Route::get('/dashboard','UserController@dashboard')->name('user_dashboard');
Route::get('/about','UserController@about')->name('about');
Route::get('/help','UserController@help')->name('help');
Route::get('/chart','UserController@idk')->name('idk_chart');
