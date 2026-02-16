<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Participation;
use App\Entity\User;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * PublicEventController - Public-facing event pages
 * Part of the Events module (Nesrine)
 */
#[Route('/events')]
final class PublicEventController extends AbstractController
{
    #[Route('', name: 'app_events')]
    public function index(Request $request, EvenementRepository $evenementRepository): Response
    {
        $type = $request->query->get('type', '');
        $ville = $request->query->get('ville', '');
        $q = $request->query->get('q', '');

        return $this->render('pages/events.html.twig', [
            'events' => $evenementRepository->findActiveWithFilters($type ?: null, $ville ?: null, $q ?: null),
            'villes' => $evenementRepository->findActiveCities(),
            'currentType' => $type,
            'currentVille' => $ville,
            'currentQ' => $q,
        ]);
    }

    #[Route('/{id}', name: 'app_event_detail', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function detail(
        Request $request,
        Evenement $evenement, 
        EvenementRepository $evenementRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$evenementRepository->isEventActive($evenement)) {
            throw $this->createNotFoundException('Event not found');
        }

        $errors = [];
        $formData = [
            'prenom' => '',
            'nom' => '',
            'email' => '',
            'telephone' => '',
        ];

        // Check if event has ended (use dateFin if available, otherwise dateDebut)
        $endDate = $evenement->getDateFin() ?? $evenement->getDateDebut();
        $eventPassed = $endDate < new \DateTime();

        // Handle POST request (form submission)
        if ($request->isMethod('POST')) {
            // Prevent registration if event has ended
            if ($eventPassed) {
                $this->addFlash('error', 'Registration is closed. This event has already ended.');
                return $this->redirectToRoute('app_event_detail', ['id' => $evenement->getId()]);
            }

            // Get form data
            $formData['prenom'] = trim($request->request->get('prenom', ''));
            $formData['nom'] = trim($request->request->get('nom', ''));
            $formData['email'] = trim($request->request->get('email', ''));
            $formData['telephone'] = trim($request->request->get('telephone', ''));

            // PHP Validation
            if (empty($formData['prenom'])) {
                $errors['prenom'] = 'First name is required';
            } elseif (strlen($formData['prenom']) < 2) {
                $errors['prenom'] = 'First name must be at least 2 characters';
            } elseif (!preg_match('/^[a-zA-ZÀ-ÿ\s\-]+$/', $formData['prenom'])) {
                $errors['prenom'] = 'First name must contain only letters';
            }

            if (empty($formData['nom'])) {
                $errors['nom'] = 'Last name is required';
            } elseif (strlen($formData['nom']) < 2) {
                $errors['nom'] = 'Last name must be at least 2 characters';
            } elseif (!preg_match('/^[a-zA-ZÀ-ÿ\s\-]+$/', $formData['nom'])) {
                $errors['nom'] = 'Last name must contain only letters';
            }

            if (empty($formData['email'])) {
                $errors['email'] = 'Email is required';
            } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Please enter a valid email address';
            }

            if (!empty($formData['telephone']) && !preg_match('/^[0-9]{8}$/', $formData['telephone'])) {
                $errors['telephone'] = 'Phone number must be exactly 8 digits';
            }

            // Check capacity
            if ($evenement->getCapaciteMax() !== null) {
                $currentParticipants = $evenement->getParticipations()->count();
                if ($currentParticipants >= $evenement->getCapaciteMax()) {
                    $this->addFlash('error', 'Sorry, this event is full.');
                    return $this->redirectToRoute('app_event_detail', ['id' => $evenement->getId()]);
                }
            }

            // If no errors, process registration
            if (empty($errors)) {
                // Find or create user
                $userRepo = $entityManager->getRepository(User::class);
                $user = $userRepo->findOneBy(['email' => $formData['email']]);

                if (!$user) {
                    // Create new user
                    $user = new User();
                    $user->setEmail($formData['email']);
                    $user->setRole('ROLE_USER');
                    $user->setStatus('active');
                    $user->setPassword('temp_password');
                    $user->setUserImage('default.png');
                    $entityManager->persist($user);
                }
                
                // Always update name from form (in case user enters different name)
                $user->setNom($formData['nom']);
                $user->setPrenom($formData['prenom']);
                if (!empty($formData['telephone'])) {
                    $user->setPhone($formData['telephone']);
                }

                // Check if already registered
                $existingParticipation = $entityManager->getRepository(Participation::class)->findOneBy([
                    'user' => $user,
                    'evenement' => $evenement,
                ]);

                if ($existingParticipation) {
                    $this->addFlash('warning', 'You are already registered for this event.');
                    return $this->redirectToRoute('app_event_detail', ['id' => $evenement->getId()]);
                }

                // Create participation
                $participation = new Participation();
                $participation->setUser($user);
                $participation->setEvenement($evenement);
                $participation->setDateParticipation(new \DateTime());
                $participation->setStatut('EN_ATTENTE');

                $entityManager->persist($participation);
                $entityManager->flush();

                $this->addFlash('success', 'Your registration has been recorded! You will receive a confirmation email.');
                return $this->redirectToRoute('app_event_detail', ['id' => $evenement->getId()]);
            }
        }

        return $this->render('pages/event_detail.html.twig', [
            'event' => $evenement,
            'errors' => $errors,
            'formData' => $formData,
            'eventPassed' => $eventPassed,
        ]);
    }
}
