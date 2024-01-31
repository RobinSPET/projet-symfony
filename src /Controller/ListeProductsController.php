<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ListeProductsController extends AbstractController
{
    #[Route('/liste', name: 'app_liste_products')]
    public function index(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        return $this->render('liste_products/index.html.twig', [
            'products' => $entityManager->getRepository(Product::class)->findAll(),
        ]);
    }
}
