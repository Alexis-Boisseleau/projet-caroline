<?php

namespace App\Controller;

use App\Repository\AmenagementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArchitectureController extends AbstractController
{
    private $repository;
    private $em;

    /**
     * @var AmenagementsRepository
     */


    public function __construct(AmenagementsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }



    /**
     * @Route ("/architecture" , name="architecture.index")
     * @return Response
     */
    public function index(): Response
    {
        $amenagements = $this->repository->findArchi();
        return $this->render("architectures/index.html.twig", [
            "current_menu" => "architectures",
            'amenagements' => $amenagements
        ]);
    }
}
