<?php

$route->get('/', 'HomeController@index')->name('home');

$route->get('/logout', 'HomeController@logout');

$route->get('/create', 'ManageController@createView')->name('create');

$route->post('/', 'HomeController@login');

/**
 * JSON
 */
$app->get('/api/markers', function() use ($app){
    $model = new Marker();
    $map = $model->getAll();
    $map = json_encode($map);

    $app->response->headers->set('Content-Type', 'application/json');
    echo $map;
});

$app->get('/api/markers/:id', function($id) use ($app){
    $model = new Marker();
    $map = $model->getOne($id);
    $map = json_encode($map);

    $app->response->headers->set('Content-Type', 'application/json');
    echo $map;
});

$app->get('/api/wars', function() use ($app){
    $model = new Wars();
    $map = $model->getAll();
    $map = json_encode($map);

    $app->response->headers->set('Content-Type', 'application/json');
    echo $map;
});
