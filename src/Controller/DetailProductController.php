<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailProductController extends AbstractController
{
    #[Route('/detail/product', name: 'app_detail_product')]
    public function index(): Response
    {
        return $this->render('detail_product/index.html.twig', [
            'controller_name' => 'DetailProductController',
        ]);
    }
}
