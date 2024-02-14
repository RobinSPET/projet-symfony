<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddImageController extends AbstractController
{
    #[Route('/add/image', name: 'app_add_image')]
    public function index(): Response
    {
        return $this->render('add_image/index.html.twig', [
            'controller_name' => 'AddImageController',
        ]);
    }
}
