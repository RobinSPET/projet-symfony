<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Images;
use App\Form\AddProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddProductController extends AbstractController
{
    #[Route('/add/product', name: 'app_add_product')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $image = $entityManager->getRepository(Images::class)->findAll(); 

        $form = $this->createForm(AddProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                
                $entityManager->persist($product);
                $entityManager->flush();
                return $this->redirectToRoute('app_liste_products');
            
        }
        return $this->render('add_product/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
