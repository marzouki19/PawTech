<?php

namespace App\Controller;

use App\Entity\Consultation;
use App\Form\ConsultationType;
use App\Repository\ConsultationRepository;
use App\Repository\SuiviRepository;
use App\Service\TwilioNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/consultation')]
class ConsultationController extends AbstractController
{
    public function __construct(private readonly LoggerInterface $logger) {}

    #[Route('/', name: 'app_consultation_index', methods: ['GET'])]
    public function index(ConsultationRepository $repo): Response
    {
        return $this->render('consultation/index.html.twig', [
            'consultations' => $repo->findAllOrdered(),
            'active' => 'consultation',
            'page_title' => 'Consultations',
        ]);
    }

    #[Route('/search', name: 'app_consultation_search', methods: ['GET'])]
    public function search(Request $request, ConsultationRepository $repo): JsonResponse
    {
        try {
            $searchValue = trim((string) $request->query->get('searchValue', ''));
            $consultations = $searchValue === '' ? $repo->findAllOrdered() : $repo->search($searchValue);
            return new JsonResponse($this->serializeConsultations($consultations));
        } catch (\Exception $e) {
            $this->logger->error('Search error: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Server error', 'message' => $e->getMessage()], 500);
        }
    }

    #[Route('/sort-by-date', name: 'app_consultation_sort_by_date', methods: ['GET'])]
    public function sortByDate(ConsultationRepository $repo): JsonResponse
    {
        try {
            return new JsonResponse($this->serializeConsultations($repo->findAllOrdered()));
        } catch (\Exception $e) {
            $this->logger->error('Sort error: ' . $e->getMessage());
            return new JsonResponse(['error' => 'Server error', 'message' => $e->getMessage()], 500);
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
                $this->notifyVeterinarian($consultation, $twilioService);
                return $this->redirectToRoute('app_consultation_index');
            } catch (\Exception $e) {
                $this->logger->error('Create consultation error: ' . $e->getMessage());
                $this->addFlash('error', 'Error while creating consultation.');
            }
        }

        return $this->render('consultation/new.html.twig', [
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Ajouter une consultation',
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
                $this->addFlash('success', 'Consultation mise a jour avec succes');
                return $this->redirectToRoute('app_consultation_index');
            } catch (\Exception $e) {
                $this->logger->error('Error updating consultation: ' . $e->getMessage());
                $this->addFlash('error', 'Une erreur est survenue lors de la mise a jour de la consultation.');
            }
        }

        return $this->render('consultation/edit.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
            'active' => 'consultation',
            'page_title' => 'Modifier la consultation',
        ]);
    }

    #[Route('/delete/{id}', name: 'app_consultation_delete', methods: ['POST', 'DELETE'])]
    public function delete(
        Request $request,
        Consultation $consultation,
        EntityManagerInterface $em,
        SuiviRepository $suiviRepository
    ): JsonResponse {
        $csrfToken = $request->headers->get('X-CSRF-Token') ?? (string) $request->request->get('_token', '');
        if (!$this->isCsrfTokenValid('app', $csrfToken)) {
            return $this->json(['success' => false, 'message' => 'Token CSRF invalide'], 400);
        }

        try {
            foreach ($suiviRepository->findBy(['consultation' => $consultation]) as $suivi) {
                $em->remove($suivi);
            }
            $em->remove($consultation);
            $em->flush();
            return $this->json(['success' => true, 'message' => 'Consultation supprimee avec succes']);
        } catch (\Exception $e) {
            $this->logger->error('Error deleting consultation: ' . $e->getMessage());
            return $this->json(['success' => false, 'message' => 'Erreur lors de la suppression: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/suivi', name: 'app_consultation_suivi', methods: ['GET'])]
    public function suivi(): Response
    {
        return $this->redirectToRoute('app_suivi_index');
    }

    private function serializeConsultations(array $consultations): array
    {
        $data = [];
        foreach ($consultations as $consultation) {
            $user = $consultation->getUser();
            $dog = $consultation->getChien();
            $data[] = [
                'id' => $consultation->getId(),
                'date' => $consultation->getDate()->format('Y-m-d H:i'),
                'type' => $consultation->getType() ?? 'N/A',
                'user_lastName' => $user ? $user->getNom() : '',
                'user_firstName' => $user ? $user->getPrenom() : '',
                'chien_nom' => $dog ? $dog->getName() : 'N/A',
                'diagnostic' => $consultation->getDiagnostic() ?? '',
                'traitement' => $consultation->getTraitement() ?? '',
            ];
        }
        return $data;
    }

    private function notifyVeterinarian(Consultation $consultation, TwilioNotificationService $twilioService): void
    {
        $user = $consultation->getUser();
        $dog = $consultation->getChien();
        if (!$user || !$dog) {
            $this->addFlash('success', 'Consultation creee avec succes');
            return;
        }

        $phone = $this->formatPhoneNumberForTwilio((string) $user->getTelephone());
        if (!$phone) {
            $this->addFlash('warning', 'Consultation creee, mais numero invalide');
            return;
        }

        $sent = $twilioService->sendConsultationNotification(
            $phone,
            trim((string) $user->getPrenom() . ' ' . (string) $user->getNom()),
            (string) $dog->getName(),
            (string) ($consultation->getType() ?? 'N/A'),
            $consultation->getDate()->format('d/m/Y H:i')
        );

        if ($sent) {
            $this->addFlash('success', 'Consultation creee et SMS envoye');
            return;
        }
        $this->addFlash('warning', 'Consultation creee, mais echec envoi SMS');
    }

    private function formatPhoneNumberForTwilio(?string $phoneNumber): ?string
    {
        $digits = preg_replace('/\D+/', '', (string) $phoneNumber) ?? '';
        if ($digits === '') {
            return null;
        }
        if (preg_match('/^[2-9]\d{7}$/', $digits)) {
            return '+216' . $digits;
        }
        if (preg_match('/^0[2-9]\d{7}$/', $digits)) {
            return '+216' . substr($digits, 1);
        }
        if (preg_match('/^216[2-9]\d{7}$/', $digits)) {
            return '+' . $digits;
        }
        if (preg_match('/^\+216[2-9]\d{7}$/', (string) $phoneNumber)) {
            return (string) $phoneNumber;
        }
        if (preg_match('/^\+\d{10,15}$/', (string) $phoneNumber)) {
            return (string) $phoneNumber;
        }
        return null;
    }
}
