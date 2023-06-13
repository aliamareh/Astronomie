<?php

namespace App\Controller;

use App\Entity\MessierCatalogue;
use App\Form\MessierCatalogueType;
use App\Repository\MessierCatalogueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/messier/catalogue')]
class MessierCatalogueController extends AbstractController
{
    #[Route('/', name: 'app_messier_catalogue_index', methods: ['GET'])]
    public function index(MessierCatalogueRepository $messierCatalogueRepository): Response
    {
        return $this->render('messier_catalogue/index.html.twig', [
            'messier_catalogues' => $messierCatalogueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_messier_catalogue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MessierCatalogueRepository $messierCatalogueRepository): Response
    {
        $messierCatalogue = new MessierCatalogue();
        $form = $this->createForm(MessierCatalogueType::class, $messierCatalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $messierCatalogueRepository->add($messierCatalogue);
            return $this->redirectToRoute('app_messier_catalogue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('messier_catalogue/new.html.twig', [
            'messier_catalogue' => $messierCatalogue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_messier_catalogue_show', methods: ['GET'])]
    public function show(MessierCatalogue $messierCatalogue): Response
    {
        return $this->render('messier_catalogue/show.html.twig', [
            'messier_catalogue' => $messierCatalogue,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_messier_catalogue_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MessierCatalogue $messierCatalogue, MessierCatalogueRepository $messierCatalogueRepository): Response
    {
        $form = $this->createForm(MessierCatalogueType::class, $messierCatalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $messierCatalogueRepository->add($messierCatalogue);
            return $this->redirectToRoute('app_messier_catalogue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('messier_catalogue/edit.html.twig', [
            'messier_catalogue' => $messierCatalogue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_messier_catalogue_delete', methods: ['POST'])]
    public function delete(Request $request, MessierCatalogue $messierCatalogue, MessierCatalogueRepository $messierCatalogueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$messierCatalogue->getId(), $request->request->get('_token'))) {
            $messierCatalogueRepository->remove($messierCatalogue);
        }

        return $this->redirectToRoute('app_messier_catalogue_index', [], Response::HTTP_SEE_OTHER);
    }
}
