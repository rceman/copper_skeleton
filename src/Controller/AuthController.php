<?php


namespace App\Controller;


use Copper\Component\Auth\AbstractAuthController;
use Copper\Component\Auth\AbstractUser;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends AbstractAuthController
{
    /**
     * @param AbstractUser $user
     *
     * @return RedirectResponse|void
     */
    protected function generateSuccessLoginResponse(AbstractUser $user)
    {
        $response = parent::generateSuccessLoginResponse($user);

        if ($user->role === User::ROLE_USER)
            $response = $this->redirectToRoute(ROUTE_get_account);

        if ($user->role === User::ROLE_ADMIN)
            $response = $this->redirectToRoute(ROUTE_get_admin);

        return $response;
    }
}