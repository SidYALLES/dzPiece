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

Route::get('/addUser','AdminController@addUserForm')->name('add_user')->middleware('auth');

Route::post('/addUser','AdminController@addUser')->middleware('auth');

Route::get('/admin','UsersController@adminIndex')->middleware('auth');

Route::get('/user','UsersController@userIndex')->middleware('auth');

Route::get('/modifyUser','AdminController@modifyUserForm')->middleware('auth');

Route::post('/modifyUser','AdminController@modifyUser')->middleware('auth');

Route::get('/addUser','AdminController@addAdminForm')->name('add_admin')->middleware('auth');

Route::post('/addUser','AdminController@addAdmin')->middleware('auth');

Route::get('/modifyAdmin','AdminController@modifyAdminForm')->middleware('auth');

Route::post('/modifyAdmin','AdminController@modifyAdmin')->middleware('auth');

Route::get('/modifyInfo','AdminController@modifyInfoForm')->middleware('auth');

Route::post('/modifyInfo','AdminController@modifyInfo')->middleware('auth');


