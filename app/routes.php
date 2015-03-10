<?php

$route->get('/', 'HomeController@index')->name('home');

$route->get('/logout', 'HomeController@logout');

$route->post('/', 'HomeController@login');