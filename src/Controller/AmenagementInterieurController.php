<?php

namespace App\Controller;

use App\Entity\Amenagements;
use App\Repository\AmenagementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AmenagementInterieurController extends AbstractController
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
     *@Route("/design", name="design-interieur")
     *
     * @return Response
     */
    public function index(): Response
    {
        $amenagements = $this->repository->findDesign();

        return $this->render('design/allDesign.html.twig', [
            'current_menu' => 'amenagements',
            'amenagements' => $amenagements
        ]);
    }

    /**
     * @Route("/design/{slug}-{id}", name="design.show", requirements={"slug":"[a-z0-9\-]*"})
     */

    public function show(Amenagements $design, string $slug): Response
    {
        if ($design->getSlug() !== $slug) {
            return $this->redirectToRoute('design.show', [
                'id' => $design->getId(),
                'slug' => $design->getSlug()
            ], 301);
        }
        return $this->render('design/show.html.twig', [
            'design' => $design,
            'current_menu' => 'amenagements'
        ]);
    }
}
