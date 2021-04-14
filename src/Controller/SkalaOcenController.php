<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkalaOcenController extends AbstractController
{
    /**
     * @Route("/skala/ocen", name="skala_ocen")
     */
    public function index(): Response
    {
        return $this->render('skala_ocen/index.html.twig', [
            'controller_name' => 'SkalaOcenController',
        ]);
    }
}
