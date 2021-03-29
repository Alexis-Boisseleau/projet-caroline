<?php

namespace App\Controller\Admin;

use App\Entity\Amenagements;
use App\Form\AmenagementsType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AmenagementsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminAmenagementsController extends AbstractController
{
    /**
     *
     * @var AmenagementsRepository
     */
    private $repository;
    private $em;

    public function __construct(AmenagementsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/admin",name="admin.amenagements.index" )
     */

    public function index(): Response
    {
        $designs = $this->repository->findDesign();
        $architectures = $this->repository->findArchi();
        return $this->render("admin/amenagements/index.html.twig", [
            "designs" => $designs,
            "architectures" => $architectures
        ]);
    }

    /**
     *
     * @Route("/admin/amenagements/create", name="admin.amenagements.new" )
     */
    public function new(Request $request)
    {
        $amenagements = new Amenagements();
        $form = $this->createForm(AmenagementsType::class, $amenagements);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($amenagements);
            $this->em->flush();
            $this->addFlash("success", 'projet créé avec succes');
            return $this->redirectToRoute("admin.amenagements.index");
        }

        return $this->render("admin/amenagements/new.html.twig", [
            'amenagements' => $amenagements,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/{id}", name="admin.edit", methods="GET|POST")
     */
    public function edit(Amenagements $amenagements, Request $request)
    {
        $form = $this->createForm(AmenagementsType::class, $amenagements);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash("success", 'Bien modifié avec succes');
            return $this->redirectToRoute("admin.amenagements.index");
        }
        return $this->render("admin/amenagements/edit.html.twig", [
            'amenagements' => $amenagements,
            'form' => $form->createView()
        ]);
    }

    /**
     *@Route("/delete/{id}", name="admin.delete")
     * @param Amenagements $amenagements
     * 
     */
    public function delete(Amenagements $amenagements)
    {
        $this->em->remove($amenagements);
        $this->em->flush();
        $this->addFlash("success", 'Bien suprrimé avec succes');
        return $this->redirectToRoute("admin.amenagements.index");
    }
}
