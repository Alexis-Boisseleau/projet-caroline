<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArchitectureController extends AbstractController
{
    /**
     * @Route ("/architecture" , name="architecture.index")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render("architectures/index.html.twig", [
            "current_menu" => "architectures"
        ]);
    }
}
