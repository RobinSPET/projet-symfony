<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(): Response
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    #[Route('/addCart/{id}', name: 'app_cart_add')]
    public function addCart($id, EntityManagerInterface $entityManager, Security $security): Response
    {
        $panier = new Panier();
        if ($security->isGranted('IS_AUTHENTICATED_FULLY')) {
            $product = $entityManager->getRepository(Product::class)->find($id);
            
            if (!$product) {
                return new JsonResponse(['error' => 'Produit non trouvé'], 404);
            }
            $panier->addProduct($product);
            $entityManager->flush();
            return new JsonResponse(['message' => 'Produit ajouté au panier avec succès']);
        }else{
            return new JsonResponse(['error' => 'Vous devez être connecté pour ajouter des produits au panier'], 403);
        }
    }
}
