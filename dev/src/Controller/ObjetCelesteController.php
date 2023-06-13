<?php

namespace App\Controller;

use App\Entity\ObjetCeleste;
use App\Form\ObjetCelesteType;
use App\Repository\ObjetCelesteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/objet/celeste')]
class ObjetCelesteController extends AbstractController
{
    #[Route('/', name: 'app_objet_celeste_index', methods: ['GET'])]
    public function index(ObjetCelesteRepository $objetCelesteRepository): Response
    {
        return $this->render('objet_celeste/index.html.twig', [
            'objet_celestes' => $objetCelesteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_objet_celeste_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ObjetCelesteRepository $objetCelesteRepository): Response
    {
        $objetCeleste = new ObjetCeleste();
        $form = $this->createForm(ObjetCelesteType::class, $objetCeleste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $objetCelesteRepository->add($objetCeleste);
            return $this->redirectToRoute('app_objet_celeste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('objet_celeste/new.html.twig', [
            'objet_celeste' => $objetCeleste,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objet_celeste_show', methods: ['GET'])]
    public function show(ObjetCeleste $objetCeleste): Response
    {
        return $this->render('objet_celeste/show.html.twig', [
            'objet_celeste' => $objetCeleste,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_objet_celeste_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ObjetCeleste $objetCeleste, ObjetCelesteRepository $objetCelesteRepository): Response
    {
        $form = $this->createForm(ObjetCelesteType::class, $objetCeleste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $objetCelesteRepository->add($objetCeleste);
            return $this->redirectToRoute('app_objet_celeste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('objet_celeste/edit.html.twig', [
            'objet_celeste' => $objetCeleste,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_objet_celeste_delete', methods: ['POST'])]
    public function delete(Request $request, ObjetCeleste $objetCeleste, ObjetCelesteRepository $objetCelesteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objetCeleste->getId(), $request->request->get('_token'))) {
            $objetCelesteRepository->remove($objetCeleste);
        }

        return $this->redirectToRoute('app_objet_celeste_index', [], Response::HTTP_SEE_OTHER);
    }
}
