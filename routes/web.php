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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// show user
Route::get('/home/{user}', 'HomeController@index')->name('home.show');

// create scorecard
Route::get('/scorecard/create', 'ScorecardsController@create');
Route::post('/scorecard', 'ScorecardsController@store');

// show scorecard
Route::get('/scorecard/{scorecard}', 'ScorecardsController@show');

// edit scorecard
Route::get('/scorecard/{scorecard}/edit', 'ScorecardsController@edit');