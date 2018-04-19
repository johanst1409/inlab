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

Route::group(['namespace' => 'Teams', 'prefix' => '/teams', 'as' => 'teams.'], function () {
	Route::get('/', ['uses' => 'TeamController@index', 'as' => 'index']);
	Route::get('/create', ['uses' => 'TeamController@create', 'as' => 'create']);
	Route::post('/create', ['uses' => 'TeamController@store', 'as' => 'create']);
	Route::get('/{team}', ['uses' => 'TeamController@show', 'as' => 'show']);
});

Route::group(['namespace' => 'Account', 'prefix' => '/@{username}', 'as' => 'profile.', 'middleware' => 'auth'], function () {
	Route::get('/', ['uses' => 'AccountController@show', 'as' => 'show']);
});

Route::group(['namespace' => 'Account', 'prefix' => '/account', 'as' => 'account.', 'middleware' => 'auth'], function () {
	Route::get('/', ['uses' => 'AccountController@index', 'as' => 'index']);
	Route::get('/edit', ['uses' => 'AccountController@edit', 'as' => 'edit']);
	Route::put('/save', ['uses' => 'AccountController@save', 'as' => 'put']);
});
