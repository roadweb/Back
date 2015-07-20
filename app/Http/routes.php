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
| CMS - Admin
|--------------------------------------------------------------------------
|
| Ici se trouvent les routes vers l'administration du site
|
*/

Route::group(['prefix' => 'admin'], function() {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\HomeController@index']);
        Route::resource('posts', 'Admin\PostsController');
        Route::resource('users', 'Admin\UsersController');
        Route::resource('questions', 'Admin\QuestionsController');
        Route::resource('stats', 'Admin\StatsController');
    });

    Route::controllers([
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
});

/*
|--------------------------------------------------------------------------
| Site web
|--------------------------------------------------------------------------
|
| Les routes vers les pages du site
|
*/

Route::get('/', 'HomeController@index');

Route::get('/landing', 'HomeController@landing');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/{id}', 'BlogController@article');

Route::get('/jobs', 'JobsController@index');

Route::get('/jobs/job', 'JobsController@description');

Route::get('/mentions', 'MotionsController@index');

Route::get('/inscription', 'SubController@sub');

Route::get('/inscription/validation', 'SubController@subvalid');

Route::get('/apropos', 'AboutusController@index');

Route::get('/compte', 'CompteController@index');

Route::get('/adhesion', 'AdhesionController@index');

/*
|--------------------------------------------------------------------------
| API
|--------------------------------------------------------------------------
|
| Il s'agit des routes liées à l'API
|
*/

//Route::group(['prefix' => 'api', 'after' => 'allowOrigin'], function () {
//    Route::get('posts', function(){
//        $posts = Post::get();
//        return Response::json(['status' => 200, 'posts' => $posts->toArray()]);
//    });
//    Route::get('posts/{id}', function($id){
//        $posts = Post::find($id);
//        return Response::json(['status' => 200, 'posts' => $posts->toArray()]);
//    });
//});