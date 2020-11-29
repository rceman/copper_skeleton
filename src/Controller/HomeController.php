<?php

namespace App\Controller;

use App\Resource\UserResource;
use Copper\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function getIndex()
    {
        $parameters = [
            'head_title' => 'App :: Home',
            'head_meta_description' => 'Application based on Copper PHP Framework',
            'head_meta_author' => '{enter your name here}',
            'message' => 'Welcome to your Application!'
        ];

        $res = new UserResource();

        var_dump($res);

        return $this->render('index', $parameters);
    }
}