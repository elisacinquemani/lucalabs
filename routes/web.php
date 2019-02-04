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

// Gestisco tutte le route da QUA

Route::get('/', function () {
    return view('home.welcome');
});

Route::resource('/students', 'StudentsController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFacebook')->name('facebookLogin');
Route::get('/callback', 'Auth\LoginController@handleProviderFacebookCallback');
