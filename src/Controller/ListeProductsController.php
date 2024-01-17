<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeProductsController extends AbstractController
{
    #[Route('/liste/products', name: 'app_liste_products')]
    public function index(): Response
    {
        return $this->render('liste_products/index.html.twig', [
            'controller_name' => 'ListeProductsController',
        ]);
    }
}
