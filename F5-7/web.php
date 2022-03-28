<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/banan', function () use ($router) {
    return "Detta är en banan";
});

$router->get('bilar', 'BilarController@index');
$router->get('bilar/{id}', 'BilarController@read');
$router->get('bilar/regnr/{regnr}', 'BilarController@getByRegnr');
$router->post('bilar', 'BilarController@create');
$router->put('bilar/{id}', 'BilarController@update');
$router->delete('bilar/{id}', 'BilarController@delete');

