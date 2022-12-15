<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaraController extends AbstractController
{
    #[Route('/tara', name: 'app_tara')]
    public function index(): Response
    {
        return $this->render('tara/index.html.twig', [
            'controller_name' => 'TaraController',
        ]);
    }
}
