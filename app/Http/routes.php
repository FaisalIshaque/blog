<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'PagesController@index');
	Route::get('contact', 'PagesController@contact');
	Route::get('home', 'PagesController@home');
	Route::get('about',  ['middleware' => 'auth', 'uses' =>  'PagesController@about']);
//	Route::get('about', 'PagesController@about');

	Route::resource('articles','ArticlesController');
	/*
	Route::get('articles', 'ArticlesController@index');
	Route::get('articles/create', 'ArticlesController@create');
	Route::get('articles/{id}', 'ArticlesController@show'); //get request from articles/1 or articles/m or anythng else
	Route::post('articles', 'ArticlesController@store');
	Route::get('articles/{id}/edit', 'ArticlesController@edit');
	Route::patch('articles/{id}', 'ArticlesController@update');
	*/

	Route::get('tasks', 'TasksController@index');
	Route::get('tasks/{id}', 'TasksController@show');

	Route::get('tags/{tags}', 'TagsController@show');

	/*Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
		]);
	// Authentication routes
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
    //*/
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('foo', ['middleware' => ['manager'], function ()
	{
	    return 'This page may only be viewed by managers.';
	}]);
    
});


