<?php

namespace App\Controller;

use App\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session,EntityManagerInterface $entityManager, Security $security): Response
    {
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')){
            $panier = $security->getUser()->getPanier();
            if ($panier === null) {
                return $this->render('panier/index.html.twig', [
                    'products' => [],
                ]);
            }
            
            return $this->render('panier/index.html.twig', [
                'products' => $panier->getProducts(),
            ]);
        }else{
            return $this->redirectToRoute('app_login');
        }
        
    }
}
