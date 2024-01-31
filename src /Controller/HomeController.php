<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        $newProds = $entityManager->getRepository(Product::class)->findAll();
        $new = [];
        for($i = 0; $i < 4; $i++) {
            $new[] = $newProds[$i];
        }
        return $this->render('home/index.html.twig', [
            'siteName' => 'CyberShop',
            'url' => "",
            'newProds' => $new,
            'session' => $session
        ]);
    }
}
