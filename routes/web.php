<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'v1', 'namespace' => 'V1'], function() use ($router) {

    $router->group(['prefix' => 'deliveries'], function() use ($router) {
        $router->get('/', 'DeliveryController@all');
        $router->post('/', 'DeliveryController@create');
        $router->get('/{id:[0-9]+}', 'DeliveryController@find');
        $router->put('/{id:[0-9]+}', 'DeliveryController@update');
        $router->delete('/{id:[0-9]+}', 'DeliveryController@delete');
    });

});
