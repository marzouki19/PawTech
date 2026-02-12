<?php

namespace App\Controller;

use App\Entity\Consultation;
use App\Form\ConsultationType;
use App\Repository\ConsultationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/consultation')]
class ConsultationController extends AbstractController
{
    #[Route('/', name: 'app_consultation_index', methods: ['GET'])]
    public function index(ConsultationRepository $repo): Response
    {
        return $this->render('consultation/index.html.twig', [
            'consultations' => $repo->findAllOrdered(),
            'active' => 'consultation',
            'page_title' => 'Consultations'
        ]);
    }

    #[Route('/search', name: 'app_consultation_search', methods: ['GET'])]
    public function search(Request $request, ConsultationRepository $repo): JsonResponse
    {
        try {
            $searchValue = $request->query->get('searchValue', '');
            
            if (empty($searchValue)) {
                $consultations = $repo->findAllOrdered();
            } else {
                $consultations = $repo->search($searchValue);
            }
            
            // Données formatées pour JSON
            $data = [];
            foreach ($consultations as $consultation) {
                $data[] = [
                    'id' => $consultation->getId(),
                    'date' => $consultation->getDate()->format('Y-m-d H:i'),
                    'type' => $consultation->getType() ?? 'N/A',
                    'user_lastName' => $consultation->getUser() ? $consultation->getUser()->getNom() : '',
                    'user_firstName' => $consultation->getUser() ? $consultation->getUser()->getPrenom() : '',
                    'chien_nom' => $consultation->getChien() ? $consultation->getChien()->getName() : 'N/A',
                    'diagnostic' => $consultation->getDiagnostic() ?? '',
                    'traitement' => $consultation->getTraitement() ?? '',
                ];
            }
            
            return new JsonResponse($data);
            
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Server error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    #[Route('/sort-by-date', name: 'app_consultation_sort_by_date', methods: ['GET'])]
    public function sortByDate(ConsultationRepository $repo): JsonResponse
    {
        try {
            $consultations = $repo->findAllOrdered();
            
            $data = [];
            foreach ($consultations as $consultation) {
                $data[] = [
                    'id' => $consultation->getId(),
                    'date' => $consultation->getDate()->format('Y-m-d H:i'),
                    'type' => $consultation->getType() ?? 'N/A',
                    'user_lastName' => $consultation->getUser() ? $consultation->getUser()->getNom() : '',
                    'user_firstName' => $consultation->getUser() ? $consultation->getUser()->getPrenom() : '',
                    'chien_nom' => $consultation->getChien() ? $consultation->getChien()->getName() : 'N/A',
                    'diagnostic' => $consultation->getDiagnostic() ?? '',
                    'traitement' => $consultation->getTraitement() ?? '',
                ];
            }
            
            return new JsonResponse($data);
            
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Server error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    #[Route('/new', name: 'app_consultation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $consultation = new Consultation();
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($consultation);
            $em->flush();

            $this->addFlash('success', 'Consultation created successfully!');
            return $this->redirectToRoute('app_consultation_index');
        }

        return $this->render('consultation/new.html.twig', [
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Add Consultation'
        ]);
    }

    #[Route('/{id}/edit', name: 'app_consultation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Consultation $consultation, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Consultation updated successfully');
            return $this->redirectToRoute('app_consultation_index');
        }

        return $this->render('consultation/edit.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Edit Consultation'
        ]);
    }

    #[Route('/delete/{id}', name: 'app_consultation_delete', methods: ['DELETE'])]
    public function delete(Request $request, Consultation $consultation, EntityManagerInterface $em): JsonResponse
    {
        // Vérifier le token CSRF
        $csrfToken = $request->headers->get('X-CSRF-Token');
        if (!$this->isCsrfTokenValid('app', $csrfToken)) {
            return $this->json([
                'success' => false,
                'message' => 'Invalid CSRF token'
            ], 400);
        }

        try {
            $em->remove($consultation);
            $em->flush();
            
            return $this->json([
                'success' => true,
                'message' => 'Consultation deleted successfully!'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error deleting consultation: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/suivi', name: 'app_consultation_suivi', methods: ['GET'])]
    public function suivi(): Response
    {
        return $this->redirectToRoute('app_suivi_index');
    }
}