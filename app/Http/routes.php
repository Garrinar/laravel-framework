<?php

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => 'api'], function (Router $router) {

});

$router->group(['namespace' => 'Web'], function (Router $router) {
    $router->group(['middleware' => 'web'], function (Router $router) {
        $router->get('/', function() {
            return view('welcome');
        });
    });

    $router->group(['middleware' => 'auth'], function (Router $router) {

    });
});


//garrinar()->router()->grid([]);