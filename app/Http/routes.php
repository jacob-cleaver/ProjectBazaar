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

// Route::group(['middleware' => 'web'], function() {
    Route::get('/', function () {
      return view('pages.home');
    });

    // Authentication Routes
    Route::auth();

    // Slug Routes
    Route::get('project-bazaar/{slug}', ['as' => 'projects.idea', 'uses' => 'ProjectIdeasController@getIdea'])
    // \w=any word charar | \d=any number character | \-=dash charcter | \_=underscore character ----- anything outside of these charcters will
    // be rejected
      ->where('slug', '[\w\d\-\_]+');

    // Page Routes
    Route::get('home', 'PagesController@getHome');
    Route::get('projectIdeas', 'PagesController@getProjectIdeas');
    Route::get('about', 'PagesController@getAbout');
    Route::get('learnmore', 'PagesController@getLearnMore');
    // Route::get('settings', 'SettingsController@index');
    // Route::get('addAccounts', 'AddAccountController@index');
    // Route::get('removeAccounts', 'RemoveAccountController@index');
    Route::get('profile', 'PagesController@getProfile');
    Route::post('settings', 'UserController@update_avatar');

    // Projects
    Route::resource('projects', 'ProjectController');

    // Courses
    // A route for create is not wanted therefore it an parameter has been set to not include a create for the courses
    // This will avoid an error if a user manages to type the url in as it will no longer exist
    Route::resource('courses', 'CourseController', ['except' => ['create']]);

    // Comments (Manually)
    Route::post('comments/{project_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
// });
