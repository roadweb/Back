<?php
session_start();
require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\Slim([
    'debug' => true,
    'templates.path' => __DIR__ . '/../app/views'
]);

$route = new Router($app);

require __DIR__ . '/../app/routes.php';

$app->run();