<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KlasaController extends AbstractController
{
    /**
     * @Route("/klasa", name="klasa")
     */
    public function index(): Response
    {
        return $this->render('klasa/index.html.twig', [
            'controller_name' => 'KlasaController', zenitsu
        ]);
    }
}
