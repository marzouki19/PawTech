<?php
// src/Controller/ConsultationController.php

namespace App\Controller;

use App\Entity\Consultation;
use App\Form\ConsultationType;
use App\Repository\ConsultationRepository;
use App\Service\TwilioNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;
use Twilio\Exceptions\RestException;

#[Route('/consultation')]
class ConsultationController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

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
            $this->logger->error('Search error: ' . $e->getMessage());
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
            $this->logger->error('Sort error: ' . $e->getMessage());
            return new JsonResponse([
                'error' => 'Server error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    #[Route('/new', name: 'app_consultation_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $em,
        TwilioNotificationService $twilioService
    ): Response {
        $consultation = new Consultation();
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->persist($consultation);
                $em->flush();

                // ===========================================
                // LOGS INTENSIFS POUR DIAGNOSTIC
                // ===========================================
                $this->logger->info('=== DÉBUT DEBUG SMS POUR CONSULTATION #' . $consultation->getId() . ' ===');
                
                // Test 1: Vérifier que le service Twilio est bien injecté
                $this->logger->info('TEST 1 - Service Twilio: ' . ($twilioService ? 'INJECTÉ' : 'NON INJECTÉ'));
                if ($twilioService) {
                    $this->logger->info('Classe du service: ' . get_class($twilioService));
                }
                
                // Test 2: Vérifier les données de la consultation
                $user = $consultation->getUser();
                $dog = $consultation->getDog();
                
                $this->logger->info('TEST 2 - Données consultation:', [
                    'user_exists' => $user ? 'OUI' : 'NON',
                    'dog_exists' => $dog ? 'OUI' : 'NON',
                    'consultation_id' => $consultation->getId(),
                    'consultation_type' => $consultation->getType(),
                    'consultation_date' => $consultation->getDate() ? $consultation->getDate()->format('Y-m-d H:i') : 'null'
                ]);
                
                // Test 3: Vérifier les données de l'utilisateur
                if ($user) {
                    $this->logger->info('TEST 3 - Données utilisateur:', [
                        'user_id' => $user->getId(),
                        'user_nom' => $user->getNom(),
                        'user_prenom' => $user->getPrenom(),
                        'user_telephone_brut' => $user->getTelephone(),
                        'user_telephone_vide' => empty($user->getTelephone()) ? 'OUI' : 'NON',
                        'user_telephone_type' => gettype($user->getTelephone())
                    ]);
                }
                
                // Test 4: Vérifier les données du chien
                if ($dog) {
                    $this->logger->info('TEST 4 - Données chien:', [
                        'dog_id' => $dog->getId(),
                        'dog_name' => $dog->getName()
                    ]);
                }
                
                // ===========================================
                // TESTS DE FORMATAGE DES NUMÉROS
                // ===========================================
                
                // Test 5: Formatage du numéro fixe 92776631
                $testPhone = $this->formatPhoneNumberForTwilio('92776631');
                $this->logger->info('TEST 5 - Formatage 92776631: ' . ($testPhone ?? 'ÉCHEC'));
                $this->addFlash('info', '🔍 Test 1 - Formatage 92776631: ' . ($testPhone ?? '❌ ÉCHEC - Numéro invalide'));
                
                // Test 6: Formatage du numéro avec 0 devant
                $testPhone2 = $this->formatPhoneNumberForTwilio('092776631');
                $this->logger->info('TEST 6 - Formatage 092776631: ' . ($testPhone2 ?? 'ÉCHEC'));
                $this->addFlash('info', '🔍 Test 2 - Formatage 092776631: ' . ($testPhone2 ?? '❌ ÉCHEC - Numéro invalide'));
                
                // Test 7: Formatage du numéro avec indicatif
                $testPhone3 = $this->formatPhoneNumberForTwilio('21692776631');
                $this->logger->info('TEST 7 - Formatage 21692776631: ' . ($testPhone3 ?? 'ÉCHEC'));
                $this->addFlash('info', '🔍 Test 3 - Formatage 21692776631: ' . ($testPhone3 ?? '❌ ÉCHEC - Numéro invalide'));
                
                // Test 8: Formatage du numéro réel de l'utilisateur
                if ($user) {
                    $userPhone = $user->getTelephone();
                    $formattedUserPhone = $this->formatPhoneNumberForTwilio($userPhone);
                    $this->logger->info('TEST 8 - Numéro utilisateur:', [
                        'original' => $userPhone,
                        'formatted' => $formattedUserPhone,
                        'format_valid' => $formattedUserPhone ? 'OUI' : 'NON'
                    ]);
                    $this->addFlash('info', '👤 Numéro utilisateur (original): ' . $userPhone);
                    $this->addFlash('info', '📱 Numéro formaté pour Twilio: ' . ($formattedUserPhone ?? '❌ ÉCHEC - Format invalide'));
                }

                // ===========================================
                // ENVOI SMS RÉEL AVEC TRY/CATCH DÉTAILLÉ
                // ===========================================
                
                if ($user && $dog) {
                    $veterinarianPhone = $user->getTelephone();
                    
                    if (!empty($veterinarianPhone)) {
                        $formattedPhone = $this->formatPhoneNumberForTwilio($veterinarianPhone);
                        
                        $this->logger->info('TEST 9 - Tentative d\'envoi SMS', [
                            'original_phone' => $veterinarianPhone,
                            'formatted_phone' => $formattedPhone,
                            'user_id' => $user->getId(),
                            'consultation_id' => $consultation->getId()
                        ]);
                        
                        if ($formattedPhone) {
                            $veterinarianName = $user->getPrenom() . ' ' . $user->getNom();
                            $dogName = $dog->getName() ?? 'Inconnu';
                            $consultationType = $consultation->getType() ?? 'Non spécifié';
                            $consultationDate = $consultation->getDate()->format('d/m/Y H:i');

                            $this->logger->info('TEST 10 - Préparation du message SMS:', [
                                'to' => $formattedPhone,
                                'name' => $veterinarianName,
                                'dog' => $dogName,
                                'type' => $consultationType,
                                'date' => $consultationDate
                            ]);

                            try {
                                // Envoyer la notification
                                $this->logger->info('TEST 11 - Appel du service Twilio...');
                                $smsSent = $twilioService->sendConsultationNotification(
                                    $formattedPhone,
                                    $veterinarianName,
                                    $dogName,
                                    $consultationType,
                                    $consultationDate
                                );
                                $this->logger->info('TEST 12 - Résultat de l\'appel: ' . ($smsSent ? 'true' : 'false'));

                                if ($smsSent) {
                                    $this->logger->info('✅ SMS envoyé avec succès pour la consultation #' . $consultation->getId());
                                    $this->addFlash('success', '✅ Consultation créée ! SMS envoyé avec succès au ' . $formattedPhone);
                                } else {
                                    $this->logger->warning('❌ Échec envoi SMS - La méthode a retourné false');
                                    $this->addFlash('warning', '⚠️ Consultation créée mais échec envoi SMS. Consultez les logs pour plus de détails.');
                                }
                            } catch (RestException $e) {
                                // Erreur spécifique Twilio
                                $this->logger->error('❌ ERREUR TWILIO REST:', [
                                    'code' => $e->getCode(),
                                    'message' => $e->getMessage(),
                                    'status_code' => $e->getStatusCode(),
                                    'more_info' => $e->getMoreInfo()
                                ]);
                                
                                $errorMessage = '❌ Erreur Twilio: ';
                                switch ($e->getCode()) {
                                    case 21211:
                                        $errorMessage .= 'Numéro de téléphone invalide';
                                        break;
                                    case 21408:
                                        $errorMessage .= 'Ce numéro n\'est pas autorisé à envoyer des SMS vers ce pays';
                                        break;
                                    case 21610:
                                        $errorMessage .= 'Ce numéro a été bloqué';
                                        break;
                                    case 30007:
                                        $errorMessage .= 'Crédit insuffisant';
                                        break;
                                    default:
                                        $errorMessage .= $e->getMessage();
                                }
                                $this->addFlash('error', $errorMessage);
                                
                            } catch (\Exception $e) {
                                // Autres erreurs
                                $this->logger->error('❌ ERREUR GÉNÉRALE:', [
                                    'message' => $e->getMessage(),
                                    'file' => $e->getFile(),
                                    'line' => $e->getLine(),
                                    'trace' => $e->getTraceAsString()
                                ]);
                                $this->addFlash('error', '❌ Erreur lors de l\'envoi du SMS: ' . $e->getMessage());
                            }
                        } else {
                            $this->logger->error('❌ Format de numéro invalide', [
                                'original_phone' => $veterinarianPhone,
                                'user_id' => $user->getId()
                            ]);
                            $this->addFlash('error', '❌ Numéro de téléphone invalide: ' . $veterinarianPhone . 
                                '. Le numéro doit être un numéro tunisien valide (ex: 92776631)');
                        }
                    } else {
                        $this->logger->warning('⚠️ Aucun numéro de téléphone pour l\'utilisateur', [
                            'user_id' => $user->getId()
                        ]);
                        $this->addFlash('warning', '⚠️ Consultation créée mais aucun numéro de téléphone pour l\'utilisateur.');
                    }
                } else {
                    $this->logger->warning('⚠️ Utilisateur ou chien manquant', [
                        'user_exists' => $user ? 'OUI' : 'NON',
                        'dog_exists' => $dog ? 'OUI' : 'NON'
                    ]);
                    $this->addFlash('success', '✅ Consultation créée avec succès ! (Aucun SMS envoyé - utilisateur ou chien manquant)');
                }

                $this->logger->info('=== FIN DEBUG SMS ===');

                return $this->redirectToRoute('app_consultation_index');

            } catch (\Exception $e) {
                $this->logger->error('❌ Erreur création consultation: ' . $e->getMessage());
                $this->addFlash('error', '❌ Erreur lors de la création: ' . $e->getMessage());
            }
        }

        return $this->render('consultation/new.html.twig', [
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Ajouter une consultation'
        ]);
    }

    #[Route('/{id}/edit', name: 'app_consultation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Consultation $consultation, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->flush();
                $this->addFlash('success', 'Consultation mise à jour avec succès');
                return $this->redirectToRoute('app_consultation_index');
            } catch (\Exception $e) {
                $this->logger->error('Error updating consultation: ' . $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour de la consultation.');
            }
        }

        return $this->render('consultation/edit.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Modifier la consultation'
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
                'message' => 'Token CSRF invalide'
            ], 400);
        }

        try {
            $em->remove($consultation);
            $em->flush();
            
            return $this->json([
                'success' => true,
                'message' => 'Consultation supprimée avec succès !'
            ]);
            
        } catch (\Exception $e) {
            $this->logger->error('Error deleting consultation: ' . $e->getMessage());
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression de la consultation: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/suivi', name: 'app_consultation_suivi', methods: ['GET'])]
    public function suivi(): Response
    {
        return $this->redirectToRoute('app_suivi_index');
    }

    /**
     * Formate le numéro de téléphone pour Twilio (Tunisie)
     */
    private function formatPhoneNumberForTwilio(string $phoneNumber): ?string
    {
        // Nettoyer le numéro (enlever les espaces, tirets, etc.)
        $originalNumber = $phoneNumber;
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        
        $this->logger->info('Formatage numéro - Original: "' . $originalNumber . '", Nettoyé: "' . $phoneNumber . '"');
        
        // CAS 1: Numéro tunisien sans indicatif (8 chiffres commençant par 2-9)
        if (preg_match('/^[2-9][0-9]{7}$/', $phoneNumber)) {
            $result = '+216' . $phoneNumber;
            $this->logger->info('Formatage - CAS 1 (sans indicatif): ' . $result);
            return $result;
        }
        
        // CAS 2: Numéro avec 0 au début (ex: 092776631)
        if (preg_match('/^0[2-9][0-9]{7}$/', $phoneNumber)) {
            $result = '+216' . substr($phoneNumber, 1);
            $this->logger->info('Formatage - CAS 2 (avec zéro): ' . $result);
            return $result;
        }
        
        // CAS 3: Numéro avec indicatif 216 sans +
        if (preg_match('/^216[2-9][0-9]{7}$/', $phoneNumber)) {
            $result = '+' . $phoneNumber;
            $this->logger->info('Formatage - CAS 3 (indicatif sans +): ' . $result);
            return $result;
        }
        
        // CAS 4: Numéro déjà au format international
        if (preg_match('/^\+216[2-9][0-9]{7}$/', $phoneNumber)) {
            $this->logger->info('Formatage - CAS 4 (déjà formaté): ' . $phoneNumber);
            return $phoneNumber;
        }

        // CAS 5: Autres formats internationaux (pour compatibilité)
        if (preg_match('/^\+[0-9]{10,15}$/', $phoneNumber)) {
            $this->logger->info('Formatage - CAS 5 (international): ' . $phoneNumber);
            return $phoneNumber;
        }

        // Si aucun format ne correspond
        $this->logger->warning('Format de numéro non reconnu: "' . $originalNumber . '" (nettoyé: "' . $phoneNumber . '")');
        return null;
    }
}