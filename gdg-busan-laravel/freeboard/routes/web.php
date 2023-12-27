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


// home
Route::get('/home', [
  'as' => 'home',
  'uses' => 'HomeController@index',
]);


// signup
Route::get('auth/register', [
    'as' => 'users.create',
    'uses' => 'UsersController@create',
]);
Route::post('auth/register', [
    'as' => 'users.store',
    'uses' => 'UsersController@store',
]);


// login and logout
Route::get('auth/login', [
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create',
]);
Route::post('auth/login', [
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store',
]);
Route::get('auth/logout', [
    'as' => 'sessions.destroy',
    'uses' => 'SessionsController@destroy',
]);


// social
Route::get('social/{provider}', [
    'as' => 'social.login',
    'uses' => 'SocialController@execute',
]);


// article
Route::resource('articles', 'ArticlesController');