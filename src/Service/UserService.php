<?php


namespace App\Service;

use App\Entity\User;
use Copper\Component\Auth\AbstractUser;

class UserService
{
    const DEFAULTS = [
        1 => [
            "id" => 1,
            "login" => "admin",
            "password" => "admin@1337",
            "role" => User::ROLE_ADMIN,
            "email" => "admin@copper.com"
        ],
        2 => [
            "id" => 2,
            "login" => "user",
            "password" => "user@1337",
            "role" => User::ROLE_USER,
            "email" => "user@copper.com"
        ]
    ];

    public static function get(int $id)
    {
        $user = null;

        foreach (static::DEFAULTS as $entry) {
            if ($id === $entry["id"])
                $user = new AbstractUser($entry["id"], $entry["login"], $entry["role"], $entry["email"]);
        }

        return $user;
    }

    public static function findByLoginAndPassword(string $login, string $password)
    {
        $user = null;

        foreach (static::DEFAULTS as $entry) {
            if ($login === $entry["login"] && $password === $entry["password"])
                $user = static::get($entry["id"]);
        }

        return $user;
    }
}