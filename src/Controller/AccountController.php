<?php

namespace App\Controller;

use App\Entity\User;
use Copper\Controller\AbstractController;

class AccountController extends AbstractController
{
    public function getIndex()
    {
        if ($this->auth->user()->hasRole([User::ROLE_ADMIN, User::ROLE_USER]) === false)
            return $this->authForbid();

        $parameters = [
            'head_title' => 'App :: User Account',
            'head_meta_description' => 'Application based on Copper PHP Framework',
            'head_meta_author' => '{enter your name here}',
            'message' => 'Welcome to User Account!'
        ];

        return $this->render('index', $parameters);
    }
}