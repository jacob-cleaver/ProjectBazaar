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
    Route::get('project-bazaar/{slug}', ['as' => 'project.list', 'uses' => 'ProjectIdeasController@getIdea'])
    // \w=any word charar | \d=any number character | \-=dash charcter | \_=underscore character ----- anything outside of these charcters will
    // be rejected
      ->where('slug', '[\w\d\-\_]+');
    Route::get('home', 'PagesController@getHome');
    Route::get('projectIdeas', 'PagesController@getProjectIdeas');
    Route::get('about', 'PagesController@getAbout');
    Route::get('learnmore', 'PagesController@getLearnMore');
    // Route::get('settings', 'SettingsController@index');
    // Route::get('addAccounts', 'AddAccountController@index');
    // Route::get('removeAccounts', 'RemoveAccountController@index');
    Route::get('profile', 'UserController@profile');
    Route::post('settings', 'UserController@update_avatar');
    Route::resource('projects', 'ProjectController');
});

// Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::auth();
