<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NauczycieleController extends AbstractController
{
    /**
     * @Route("/nauczyciele", name="nauczyciele")
     */
    public function index(): Response
    {
        return $this->render('nauczyciele/index.html.twig', [
            'controller_name' => 'NauczycieleController',
        ]);
    }
}
