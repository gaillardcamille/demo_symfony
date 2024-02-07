<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }

    #[Route('/helloToYou/{nom}/{prenom}', name: 'app_helloToYou')]
    public function helloToYou($nom, $prenom)
    {
        //return new Response("Bonjour $nom !");
        return $this->render('helloToYou/helloToYou.html.twig', [
            'nom' => $nom,
            'prenom' => $prenom
        ]);
    }
}
