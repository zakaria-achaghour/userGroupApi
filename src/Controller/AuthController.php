<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'auth', methods: ['POST'])]
    public function login(
        JWTTokenManagerInterface $JWTManager,
        UserInterface $user
    ): JsonResponse {
        return new JsonResponse([
            'token' => $JWTManager->create($user),
        ]);
    }
}
