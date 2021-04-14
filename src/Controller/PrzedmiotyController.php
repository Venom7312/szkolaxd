<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrzedmiotyController extends AbstractController
{
    /**
     * @Route("/przedmioty", name="przedmioty")
     */
    public function index(): Response
    {
        return $this->render('przedmioty/index.html.twig', [
            'controller_name' => 'PrzedmiotyController',
        ]);
    }
}
