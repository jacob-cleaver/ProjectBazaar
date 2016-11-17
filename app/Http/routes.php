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

Route::group(['middleware' => 'web'], function() {
    Route::auth();
    Route::get('/', function () {
        return view('pages.home');
    });

    Route::get('access', function(){
      echo 'You have access!';
    })->middleware('isAdmin');

    Route::get('/home', 'HomeController@index');
    Route::get('/projects', 'ProjectController@index');
    Route::get('/about', 'AboutController@index');
    Route::get('/learnmore', 'LearnMoreController@index');
    Route::get('/settings', 'SettingsController@index');
    Route::get('/addAccounts', 'AddAccountController@index');
    Route::get('/removeAccounts', 'RemoveAccountController@index');
    Route::get('/profile', 'UserController@profile');
    Route::post('/settings', 'UserController@update_avatar');
});

// Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::auth();
