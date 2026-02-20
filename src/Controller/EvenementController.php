<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/evenement')]
final class EvenementController extends AbstractController
{
    #[Route('', name: 'app_evenement_index', methods: ['GET'])]
    public function index(Request $request, EvenementRepository $evenementRepository): Response
    {
        $q = $request->query->get('q', '');
        $type = $request->query->get('type', '');
        $statut = $request->query->get('statut', '');
        $sort = $request->query->get('sort', 'dateDebut_DESC');

        // Use repository method for search/filter/sort
        $evenements = $evenementRepository->findWithAdminFilters(
            $q ?: null,
            $type ?: null,
            $statut ?: null,
            $sort
        );

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
            'active' => 'evenement',
        ]);
    }

    #[Route('/filter', name: 'app_evenement_filter', methods: ['GET'])]
    public function filter(Request $request, EvenementRepository $evenementRepository): JsonResponse
    {
        $q = $request->query->get('q', '');
        $type = $request->query->get('type', '');
        $statut = $request->query->get('statut', '');
        $sort = $request->query->get('sort', 'dateDebut_DESC');

        $evenements = $evenementRepository->findWithAdminFilters(
            $q ?: null,
            $type ?: null,
            $statut ?: null,
            $sort
        );

        $data = [];
        foreach ($evenements as $e) {
            $data[] = [
                'id' => $e->getId(),
                'titre' => $e->getTitre(),
                'type' => $e->getType(),
                'dateDebut' => $e->getDateDebut()->format('d/m/Y'),
                'heureDebut' => $e->getDateDebut()->format('H:i'),
                'ville' => $e->getVille(),
                'capaciteMax' => $e->getCapaciteMax(),
                'statut' => $e->getStatut(),
                'showUrl' => $this->generateUrl('app_evenement_show', ['id' => $e->getId()]),
                'editUrl' => $this->generateUrl('app_evenement_edit', ['id' => $e->getId()]),
            ];
        }

        return new JsonResponse(['ok' => true, 'count' => count($data), 'items' => $data]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('kernel.project_dir') . '/public/uploads/events',
                    $newFilename
                );
                $evenement->setImage($newFilename);
            }

            $entityManager->persist($evenement);
            $entityManager->flush();

            $this->addFlash('success', 'Événement créé avec succès.');
            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
            'active' => 'evenement',
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'active' => 'evenement',
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload
             $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                // Delete old image  if exists
                if ($evenement->getImage()) {
                    $oldImagePath = $this->getParameter('kernel.project_dir') . '/public/uploads/events/' . $evenement->getImage();
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('kernel.project_dir') . '/public/uploads/events',
                    $newFilename
                );
                $evenement->setImage($newFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Événement modifié avec succès.');
            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
            'active' => 'evenement',
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
            $this->addFlash('success', 'Événement supprimé avec succès.');
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
