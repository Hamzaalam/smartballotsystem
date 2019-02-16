<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


Route::get('/cnic', 'HomeController@getCnic');

Route::get('/cnicPost/{cnicNum}', 'HomeController@postCnic');

Route::get('/bio', 'HomeController@biometric');

Route::get('/details', 'HomeController@getDetails');

Route::get('/NABallot', 'HomeController@NABallot');

Route::get('/PSBallot', 'HomeController@PSBallot');

Route::get('/logout', 'HomeController@logout');
