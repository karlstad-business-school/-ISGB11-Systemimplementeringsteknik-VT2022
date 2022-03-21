<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/banan', function () use ($router) {
    return "Detta är en banan";
});

$router->get('bilar', 'BilarController@index');
