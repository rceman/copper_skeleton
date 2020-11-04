<?php

namespace App\Controller;

use App\Entity\User;
use Copper\Controller\AbstractController;
use Copper\Kernel;

class AdminController extends AbstractController
{
    public function getIndex()
    {
        if ($this->auth->user()->hasRole(User::ROLE_ADMIN) === false)
            return $this->authForbid();

        $parameters = [
            'head_title' => 'App :: Admin Panel',
            'head_meta_description' => 'Application based on Copper PHP Framework',
            'head_meta_author' => '{enter your name here}',
            'message' => 'Welcome to Admin Panel!'
        ];

        return $this->render('index', $parameters);
    }
}