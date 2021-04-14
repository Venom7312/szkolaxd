<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UczenController extends AbstractController
{
    /**
     * @Route("/uczen", name="uczen")
     */
    public function index(): Response
    {
        return $this->render('uczen/index.html.twig', [
            'controller_name' => 'UczenController',
        ]);
    }
}
