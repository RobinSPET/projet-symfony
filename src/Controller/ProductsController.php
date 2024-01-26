<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(SessionInterface $session): Response
    {
        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
            'session' => $session
        ]);
    }
}
