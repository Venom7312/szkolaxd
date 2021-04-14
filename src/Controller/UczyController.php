<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UczyController extends AbstractController
{
    /**
     * @Route("/uczy", name="uczy")
     */
    public function index(): Response
    {
        return $this->render('uczy/index.html.twig', [
            'controller_name' => 'UczyController',
        ]);
    }
}
