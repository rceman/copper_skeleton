<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

use App\Controller\HomeController;

return function (RoutingConfigurator $routes) {
    $routes->add('index', '/')
        ->controller([HomeController::class, 'getIndex'])
        ->methods(['GET']);
};