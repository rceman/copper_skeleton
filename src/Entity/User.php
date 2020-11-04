<?php


namespace App\Entity;


use Copper\Component\Auth\AbstractUser;

class User extends AbstractUser
{
    const ROLE_USER = 'user';
}