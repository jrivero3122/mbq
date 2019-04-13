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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/search', 'PagesController@search');

// Profile

Route::get('/profiles', 'ProfilesController@index');
Route::get('/profiles/{id}/edit', 'ProfilesController@edit');
Route::post('/profiles/{id}', 'ProfilesController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home/{id}/edit', 'HomeController@edit');

Route::resource('profiles', 'ProfilesController');
