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
Route::auth();
/*
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
 	Route::group(['prefix' => 'adminzone'], function () {
		Route::get('/', function(){
			return view('admin.dashboard');
		});
	});
*/
Route::group(['prefix'=>'adminzone'], function()
	{
		Route::get('/', function()
		{
			return view('admin.dashboard');
		});

		Route::resource('articles', 'ArticlesController');
		Route::resource('pages', 'PagesController');
		Route::resource('categories', 'CategoriesController');
		Route::get('comments','CommentsController@show');
		Route::get('comments/delete/{id}','CommentsController@delete');
		Route::get('comments/published/{id}','CommentsController@published');
	});

Route::get('/show/{id}','HomeController@show');
Route::post('/show/{id}','CommentsController@save');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');