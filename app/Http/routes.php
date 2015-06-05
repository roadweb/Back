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

use App\Post;

/*
|--------------------------------------------------------------------------
| CMS
|--------------------------------------------------------------------------
*/

Route::get('/', 'Admin\HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', 'Admin\PostsController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('questions', 'Admin\QuestionsController');
    Route::get('stats', 'Admin\StatsController@index');
});



/*
|--------------------------------------------------------------------------
| API
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'after' => 'allowOrigin'], function () {
    Route::get('posts', function(){
        $posts = Post::get();
        return Response::json(['status' => 200, 'posts' => $posts->toArray()]);
    });
    Route::get('posts/{id}', function($id){
        $posts = Post::find($id);
        return Response::json(['status' => 200, 'posts' => $posts->toArray()]);
    });
});


Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
