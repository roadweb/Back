<?php
/*
|--------------------------------------------------------------------------
| C'est ici qu'on mettra toute les routes de l'application
|--------------------------------------------------------------------------
| Essayer de créer les routes de la façon la plus claire possible
| $route->get('{On met ici l'url}', '{On met ici le controller avec la méthode à appeler}');
*/

/** Les routes en GET */
$route->get('/', 'HomeController@index')->name('home');
$route->get('/logout', 'HomeController@logout');
$route->get('/blog', 'BlogController@index');
$route->get('/blog/add', 'BlogController@add');
$route->get('/blog/edit/{id}', 'BlogController@edit');

/** Les routes en POST */
$route->post('/', 'HomeController@login');
$route->post('/blog/delete/{id}', 'BlogController@delete');