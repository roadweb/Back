<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('userdetails', 'UserDetailsController');
Route::resource('job', 'JobController');
Route::resource('socialnetwork', 'SocialNetworkController');
Route::resource('usersocialnetwork', 'UserSocialNetworkController');
Route::resource('training', 'TrainingController');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('asks', 'AsksController');
Route::resource('seo', 'SeoController');
Route::resource('tags', 'TagsController');
Route::resource('poststags', 'PostsTagsController');
Route::resource('user', 'UserController');
Route::resource('right', 'RightController');
Route::resource('state', 'StateController');
Route::resource('anonymous', 'AnonymousController');
