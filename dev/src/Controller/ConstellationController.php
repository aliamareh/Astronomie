<?php

namespace App\Controller;

use App\Entity\Constellation;
use App\Form\ConstellationType;
use App\Repository\ConstellationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/constellation')]
class ConstellationController extends AbstractController
{
    #[Route('/', name: 'app_constellation_index', methods: ['GET'])]
    public function index(ConstellationRepository $constellationRepository): Response
    {
        return $this->render('constellation/index.html.twig', [
            'constellations' => $constellationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_constellation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConstellationRepository $constellationRepository): Response
    {
        $constellation = new Constellation();
        $form = $this->createForm(ConstellationType::class, $constellation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constellationRepository->add($constellation);
            return $this->redirectToRoute('app_constellation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constellation/new.html.twig', [
            'constellation' => $constellation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constellation_show', methods: ['GET'])]
    public function show(Constellation $constellation): Response
    {
        return $this->render('constellation/show.html.twig', [
            'constellation' => $constellation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_constellation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Constellation $constellation, ConstellationRepository $constellationRepository): Response
    {
        $form = $this->createForm(ConstellationType::class, $constellation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $constellationRepository->add($constellation);
            return $this->redirectToRoute('app_constellation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('constellation/edit.html.twig', [
            'constellation' => $constellation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_constellation_delete', methods: ['POST'])]
    public function delete(Request $request, Constellation $constellation, ConstellationRepository $constellationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$constellation->getId(), $request->request->get('_token'))) {
            $constellationRepository->remove($constellation);
        }

        return $this->redirectToRoute('app_constellation_index', [], Response::HTTP_SEE_OTHER);
    }
}
