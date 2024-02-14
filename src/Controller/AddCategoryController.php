<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\AddCategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddCategoryController extends AbstractController
{
    #[Route('/add/category', name: 'app_add_category')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(AddCategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                
                $entityManager->persist($categorie);
                $entityManager->flush();
                return $this->redirectToRoute('app_liste_products');
            
        }
        return $this->render('add_category/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
