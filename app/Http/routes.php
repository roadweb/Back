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
Route::get('/', function () {
    return view('welcome');
});
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
});