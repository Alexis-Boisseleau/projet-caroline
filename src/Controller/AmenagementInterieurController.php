<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmenagementInterieurController extends AbstractController
{

    /**
     *@Route("/amenagements", name="design-interieur")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('amenagements/allDesign.html.twig', [
            'current_menu' => 'amenagements'
        ]);
    }
}
