<?php

namespace App\Controller;

use App\Entity\Suivi;
use App\Form\SuiviType;
use App\Repository\SuiviRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/suivi')]
class SuiviController extends AbstractController
{
    #[Route('/', name: 'app_suivi_index', methods: ['GET'])]
    public function index(SuiviRepository $suiviRepository): Response
    {
        // Récupérer tous les suivis
        $suivis = $suiviRepository->findAll();
        
        // Calculer les statistiques
        $currentYearMonth = new \DateTime('first day of this month');
        
        $stats = [
            'monthly_count' => $suiviRepository->countThisMonth($currentYearMonth),
            'planned_count' => $suiviRepository->countByEtat('Planifié'),
            'completion_rate' => $suiviRepository->getCompletionRate(),
            'upcoming_count' => count($suiviRepository->findUpcoming()),
        ];

        return $this->render('suivi/index.html.twig', [
            'suivis' => $suivis,
            'stats' => $stats,
            'active' => 'suivi',
            'page_title' => 'Follow-up of Consultations'
        ]);
    }

    // AJAX: Recherche par type OU état
    #[Route('/search-by-type', name: 'app_suivi_search_by_type', methods: ['GET'])]
    public function searchByType(Request $request, SuiviRepository $suiviRepository): JsonResponse
    {
        try {
            $searchValue = $request->query->get('searchValue', '');
            
            if (empty($searchValue)) {
                $suivis = $suiviRepository->findAll();
            } else {
                // Map des termes de recherche pour les statuts
                $etatMap = [
                    'planifié' => 'Planifié',
                    'planifiée' => 'Planifié',
                    'planifiées' => 'Planifié',
                    'en cours' => 'En cours',
                    'encours' => 'En cours',
                    'terminé' => 'Terminé',
                    'terminée' => 'Terminé',
                    'terminées' => 'Terminé',
                    'annulé' => 'Annulé',
                    'annulée' => 'Annulé',
                    'annulées' => 'Annulé',
                    'planned' => 'Planifié',
                    'ongoing' => 'En cours',
                    'completed' => 'Terminé',
                    'cancelled' => 'Annulé'
                ];
                
                $lowerSearchTerm = strtolower($searchValue);
                
                // Recherche par type OU par état
                $query = $suiviRepository->createQueryBuilder('s');
                
                if (isset($etatMap[$lowerSearchTerm])) {
                    // Recherche exacte par état
                    $query->where('s.etat = :etat')
                          ->setParameter('etat', $etatMap[$lowerSearchTerm]);
                } else {
                    // Recherche par type avec LIKE
                    $searchTermLike = '%' . $searchValue . '%';
                    $query->where('s.type LIKE :searchTerm')
                          ->setParameter('searchTerm', $searchTermLike);
                }
                
                $query->orderBy('s.prochaineVisite', 'DESC')
                      ->addOrderBy('s.id', 'DESC');
                
                $suivis = $query->getQuery()->getResult();
            }
            
            // Données formatées pour JSON
            $data = [];
            foreach ($suivis as $suivi) {
                $data[] = [
                    'id' => $suivi->getId(),
                    'etat' => $suivi->getEtat() ?? 'N/A',
                    'type' => $suivi->getType() ?? 'N/A',
                    'recommandation' => $suivi->getRecommandation() ?? '',
                    'prochaine_visite' => $suivi->getProchaineVisite() ? 
                        $suivi->getProchaineVisite()->format('d/m/Y H:i') : null,
                    'consultation_id' => $suivi->getConsultation() ? $suivi->getConsultation()->getId() : null,
                    'dog_nom' => $suivi->getConsultation() && $suivi->getConsultation()->getDog() ?
                        $suivi->getConsultation()->getDog()->getName() : 'N/A',
                ];
            }
            
            return new JsonResponse($data);
            
        } catch (\Exception $e) {
            // Retourner une erreur simple
            return new JsonResponse([
                'error' => 'Server error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

   
    #[Route('/search-by-etat', name: 'app_suivi_search_by_etat', methods: ['GET'])]
    public function searchByEtat(Request $request, SuiviRepository $suiviRepository): JsonResponse
    {
        try {
            $etat = $request->query->get('etat', '');
            
            if (empty($etat)) {
                $suivis = $suiviRepository->findAll();
            } else {
                $suivis = $suiviRepository->findByEtat($etat);
            }
            
            $data = [];
            foreach ($suivis as $suivi) {
                $data[] = [
                    'id' => $suivi->getId(),
                    'etat' => $suivi->getEtat() ?? 'N/A',
                    'type' => $suivi->getType() ?? 'N/A',
                    'recommandation' => $suivi->getRecommandation() ?? '',
                    'prochaine_visite' => $suivi->getProchaineVisite() ? 
                        $suivi->getProchaineVisite()->format('d/m/Y H:i') : null,
                    'consultation_id' => $suivi->getConsultation() ? $suivi->getConsultation()->getId() : null,
                    'chien_nom' => $suivi->getConsultation() && $suivi->getConsultation()->getChien() ?
                        $suivi->getConsultation()->getChien()->getNom() : 'N/A',
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

   
    #[Route('/sort-by-date', name: 'app_suivi_sort_by_date', methods: ['GET'])]
    public function sortByDate(SuiviRepository $suiviRepository): JsonResponse
    {
        try {
            // Tri simple
            $suivis = $suiviRepository->findAllOrdered();
            
            $data = [];
            foreach ($suivis as $suivi) {
                $data[] = [
                    'id' => $suivi->getId(),
                    'etat' => $suivi->getEtat() ?? 'N/A',
                    'type' => $suivi->getType() ?? 'N/A',
                    'recommandation' => $suivi->getRecommandation() ?? '',
                    'prochaine_visite' => $suivi->getProchaineVisite() ? 
                        $suivi->getProchaineVisite()->format('d/m/Y H:i') : null,
                    'consultation_id' => $suivi->getConsultation() ? $suivi->getConsultation()->getId() : null,
                    'dog_nom' => $suivi->getConsultation() && $suivi->getConsultation()->getDog() ?
                        $suivi->getConsultation()->getDog()->getName() : 'N/A',
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

    #[Route('/new', name: 'app_suivi_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $suivi = new Suivi();
       
        
        $form = $this->createForm(SuiviType::class, $suivi);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($suivi);
            $entityManager->flush();

            $this->addFlash('success', 'Follow-Up ajouté avec succès !');
            return $this->redirectToRoute('app_suivi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi/new.html.twig', [
            'suivi' => $suivi,
            'form' => $form->createView(),
            'active' => 'suivi',
            'page_title' => 'Add New Follow-Up'
        ]);
    }

    #[Route('/{id}/edit', name: 'app_suivi_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Suivi $suivi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SuiviType::class, $suivi);
        $form->handleRequest($request);

        // VÉRIFICATION EXACTEMENT COMME DANS LE WORKSHOP (Figure 3)
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Follow-Up modifié avec succès !');
            return $this->redirectToRoute('app_suivi_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('suivi/edit.html.twig', [
            'suivi' => $suivi,
            'form' => $form->createView(),
            'active' => 'suivi',
            'page_title' => 'Modifier Follow-Up #' . $suivi->getId()
        ]);
    }

    #[Route('/delete/{id}', name: 'app_suivi_delete', methods: ['DELETE'])]
    public function delete(Request $request, Suivi $suivi, EntityManagerInterface $entityManager): JsonResponse
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
            $entityManager->remove($suivi);
            $entityManager->flush();
            
            return $this->json([
                'success' => true,
                'message' => 'Follow-up deleted successfully!'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error deleting follow-up: ' . $e->getMessage()
            ], 500);
        }
    }

    // Route optionnelle pour les tests - PAS NÉCESSAIRE POUR LE WORKSHOP
    #[Route('/test', name: 'app_suivi_test', methods: ['GET'])]
    public function test(): Response
    {
        return $this->render('suivi/test.html.twig');
    }
}