<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductDetailController extends AbstractController
{
    #[Route('/product/detail', name: 'app_product_detail')]
    public function index(SessionInterface $session): Response
    {
        return $this->render('product_detail/index.html.twig', [
            'controller_name' => 'ProductDetailController',
            'session' => $session
        ]);
    }
}
