<?php

namespace App\Controller;

use App\Entity\Amenagements;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AmenagementsRepository;
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


    /**
     * @Route("/architecture/{slug}-{id}", name="archi.show", requirements={"slug":"[a-z0-9\-]*"})
     */

    public function show(Amenagements $archi, string $slug): Response
    {
        if ($archi->getSlug() !== $slug) {
            return $this->redirectToRoute('archi.show', [
                'id' => $archi->getId(),
                'slug' => $archi->getSlug()
            ], 301);
        }
        return $this->render('architectures/show.html.twig', [
            'archi' => $archi,
            'current_menu' => 'amenagements'
        ]);
    }
}
