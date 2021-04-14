<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OcenyController extends AbstractController
{
    /**
     * @Route("/oceny", name="oceny")
     */
    public function index(): Response
    {
        return $this->render('oceny/index.html.twig', [
            'controller_name' => 'OcenyController',
        ]);
    }
}
