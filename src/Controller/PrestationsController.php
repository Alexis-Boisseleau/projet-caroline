<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrestationsController extends AbstractController
{
    /**
     * @Route ("/prestation", name="prestations")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render("pages/prestations.html.twig", [
            "current_menu" => "prestations"
        ]);
    }
}
