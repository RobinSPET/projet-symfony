<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeProductsController extends AbstractController
{
    #[Route('/liste/products', name: 'app_liste_products')]
    public function index(SessionInterface $session): Response
    {
        return $this->render('liste_products/index.html.twig', [
            'controller_name' => 'ListeProductsController',
            'session' => $session
        ]);
    }
}
