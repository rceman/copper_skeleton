<?php

use App\Controller\AccountController;
use App\Controller\AdminController;
use App\Controller\AuthController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

use App\Controller\HomeController;

const ROUTE_get_auth_login = 'get_auth_login';
const ROUTE_post_auth_login = 'post_auth_login';
const ROUTE_get_auth_logout = 'get_auth_logout';

const ROUTE_get_admin = 'get_admin';
const ROUTE_get_account = 'get_account';

return function (RoutingConfigurator $routes) {

    $routes->add(ROUTE_index, '/')
        ->controller([HomeController::class, 'getIndex'])
        ->methods(['GET']);

    // ================== Auth ===================

    $routes->add(ROUTE_get_auth_login, '/auth/login')
        ->controller([AuthController::class, 'getLogin'])
        ->methods(['GET']);

    $routes->add(ROUTE_post_auth_login, '/auth/login')
        ->controller([AuthController::class, 'postLogin'])
        ->methods(['POST']);

    $routes->add(ROUTE_get_auth_logout, '/auth/logout')
        ->controller([AuthController::class, 'getLogout'])
        ->methods(['GET']);

    // ================== Admin ===================

    $routes->add(ROUTE_get_admin, '/admin')
        ->controller([AdminController::class, 'getIndex'])
        ->methods(['GET']);

    // ================== Account ===================

    $routes->add(ROUTE_get_account, '/account')
        ->controller([AccountController::class, 'getIndex'])
        ->methods(['GET']);

};