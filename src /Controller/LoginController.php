<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(SessionInterface $session): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'session' => $session
        ]);
    }
}
