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

/*
Route::get('/teams', 'teams\TeamController@index')->name('teams.index');
*/
Route::group(['namespace' => 'Teams', 'prefix' => '/teams', 'as' => 'teams.'], function () {
	Route::get('/', ['uses' => 'TeamController@index', 'as' => 'index']);
});


Route::group(['namespace' => 'Account', 'prefix' => '/account', 'as' => 'account.'], function () {
	Route::get('/', ['uses' => 'AccountController@index', 'as' => 'index']);
});