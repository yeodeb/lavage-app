<?php

namespace App\Controller;

use App\Entity\LavagePrestation;
use App\Form\LavagePrestationType;
use App\Repository\LavagePrestationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lavage/prestation")
 */
class LavagePrestationController extends AbstractController
{
    /**
     * @Route("/", name="lavage_prestation_index", methods={"GET"})
     */
    public function index(LavagePrestationRepository $lavagePrestationRepository): Response
    {
        return $this->render('lavage_prestation/index.html.twig', [
            'lavage_prestations' => $lavagePrestationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="lavage_prestation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lavagePrestation = new LavagePrestation();
        $form = $this->createForm(LavagePrestationType::class, $lavagePrestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lavagePrestation->setDate(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lavagePrestation);
            $entityManager->flush();

            return $this->redirectToRoute('lavage_prestation_index');
        }

        return $this->render('lavage_prestation/new.html.twig', [
            'lavage_prestation' => $lavagePrestation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lavage_prestation_show", methods={"GET"})
     */
    public function show(LavagePrestation $lavagePrestation): Response
    {
        return $this->render('lavage_prestation/show.html.twig', [
            'lavage_prestation' => $lavagePrestation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lavage_prestation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LavagePrestation $lavagePrestation): Response
    {
        $form = $this->createForm(LavagePrestationType::class, $lavagePrestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lavage_prestation_index');
        }

        return $this->render('lavage_prestation/edit.html.twig', [
            'lavage_prestation' => $lavagePrestation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lavage_prestation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LavagePrestation $lavagePrestation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lavagePrestation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lavagePrestation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lavage_prestation_index');
    }
}
