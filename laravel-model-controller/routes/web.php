<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PageController@index')->name('home');
// Route::get('/film','PageController@film')->name('film');
Route::get('/film','MoviesController@index')->name('film');
Route::get('/about','PageController@about')->name('about');
Route::get('/contatti', 'PageController@contatti')->name('contatti');
// Route::get('film','FilmController@index')->name('film');
