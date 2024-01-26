<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if ($entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]) ||  $entityManager->getRepository(User::class)->findOneBy(['pseudo' => $user->getPseudo()])){
                $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('app_login');
            }
            
        }
        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
