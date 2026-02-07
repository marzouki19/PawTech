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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/consultation')]
class ConsultationController extends AbstractController
{
    #[Route('/', name: 'app_consultation_index', methods: ['GET'])]
    public function index(ConsultationRepository $repo): Response
    {
        return $this->render('consultation/index.html.twig', [
            'consultations' => $repo->findAll(),
            'active' => 'consultation',
            'page_title' => 'Consultations'
        ]);
    }

    #[Route('/search', name: 'app_consultation_search', methods: ['GET'])]
    public function search(Request $request, ConsultationRepository $repo): JsonResponse
    {
        $searchTerm = $request->query->get('searchValue', '');
        
        if (empty($searchTerm)) {
            $consultations = $repo->findAll();
        } else {
            $consultations = $repo->search($searchTerm);
        }
        
        // Format personnalisé pour la compatibilité avec le template
        $data = [];
        foreach ($consultations as $consultation) {
            $user = $consultation->getUser();
            $userLastName = $user ? $user->getnom() : '';
            $userFirstName = $user ? $user->getPrenom() : '';
            
            $data[] = [
                'id' => $consultation->getId(),
                'date' => $consultation->getDate()->format('Y-m-d H:i'),
                'type' => $consultation->getType(),
                'nom' => $userLastName,
                'prenom' => $userFirstName,
                'diagnostic' => $consultation->getDiagnostic(),
                'traitement' => $consultation->getTraitement(),
            ];
        }
        
        return $this->json($data);
    }

    #[Route('/sort-by-date', name: 'app_consultation_sort_by_date', methods: ['GET'])]
    public function sortByDate(ConsultationRepository $repo): JsonResponse
    {
        $consultations = $repo->findAllOrdered();
        
        $data = [];
        foreach ($consultations as $consultation) {
            $user = $consultation->getUser();
            $userLastName = $user ? $user->getnom() : '';
            $userFirstName = $user ? $user->getPrenom() : '';
            
            $data[] = [
                'id' => $consultation->getId(),
                'date' => $consultation->getDate()->format('Y-m-d H:i'),
                'type' => $consultation->getType(),
                'nom' => $userLastName,
                'prenom' => $userFirstName,
                'diagnostic' => $consultation->getDiagnostic(),
                'traitement' => $consultation->getTraitement(),
            ];
        }
        
        return $this->json($data);
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

            $this->addFlash('success', 'Appointment request sent successfully! We will contact you soon.');
            return $this->redirectToRoute('app_consultation_index');
        }

        return $this->render('consultation/new.html.twig', [
            'form' => $form,
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
            'form' => $form,
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
        // Redirection vers le SuiviController pour éviter la duplication de code
        return $this->redirectToRoute('app_suivi_index');
    }
}