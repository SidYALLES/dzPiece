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

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout','UsersController@logout');

Route::post('/login', 'UsersController@login');

Route::post('/contact/submit','MessageControler@submit');


