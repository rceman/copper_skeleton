<?php

use App\Service\UserService;
use Copper\Component\Auth\AuthConfigurator;

return function (AuthConfigurator $auth) {

    $auth->registerUserHandlerClosure(function ($id) {
        return UserService::get($id);
    });

    $auth->registerValidateHandlerClosure(function ($login, $password) {
        return UserService::findByLoginAndPassword($login, $password);
    });

};