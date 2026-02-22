<?php

namespace App\Controller;

use App\Entity\Adoption;
use App\Entity\Dogs;
use App\Form\AdoptionAdminType;
use App\Repository\AdoptionRepository;
use App\Repository\DogsRepository;
use App\Repository\UserRepository;
use App\Service\GeminiService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/adoption')]
final class AdoptionController extends AbstractController
{
    #[Route(name: 'app_adoption_index', methods: ['GET'])]
    public function index(AdoptionRepository $adoptionRepository, DogsRepository $dogsRepository): Response
    {
        $rows = $adoptionRepository->createQueryBuilder('a')
            ->select('IDENTITY(a.dog) AS dog_id, COUNT(a.id) AS requestsCount, MAX(a.createdAt) AS lastRequestAt')
            ->groupBy('a.dog')
            ->orderBy('requestsCount', 'DESC')
            ->addOrderBy('lastRequestAt', 'DESC')
            ->getQuery()
            ->getResult();

        $dogIds = array_values(array_unique(array_map(
            static fn (array $row): int => (int) ($row['dog_id'] ?? 0),
            $rows
        )));

        $dogsById = [];
        if ($dogIds !== []) {
            $dogs = $dogsRepository->createQueryBuilder('d')
                ->andWhere('d.id IN (:ids)')
                ->setParameter('ids', $dogIds)
                ->getQuery()
                ->getResult();

            foreach ($dogs as $dog) {
                $dogsById[$dog->getId()] = $dog;
            }
        }

        $dogCards = [];
        foreach ($rows as $row) {
            $dogId = (int) ($row['dog_id'] ?? 0);
            if ($dogId <= 0 || !isset($dogsById[$dogId])) {
                continue;
            }

            $lastRequestAt = $row['lastRequestAt'] ?? null;
            if (is_string($lastRequestAt) && $lastRequestAt !== '') {
                try {
                    $lastRequestAt = new \DateTimeImmutable($lastRequestAt);
                } catch (\Throwable) {
                    $lastRequestAt = null;
                }
            }

            $dogCards[] = [
                'dog' => $dogsById[$dogId],
                'requests_count' => (int) ($row['requestsCount'] ?? 0),
                'last_request_at' => $lastRequestAt,
            ];
        }

        return $this->render('adoption/index.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Adoptions',
            'dog_cards' => $dogCards,
            'total_dogs' => count($dogCards),
        ]);
    }

    #[Route('/dog/{id}/requests', name: 'app_adoption_dog_adpot_list', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function dogAdpotList(Dogs $dog, AdoptionRepository $adoptionRepository): Response
    {
        $adoptions = $adoptionRepository->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->addSelect('u')
            ->andWhere('a.dog = :dog')
            ->setParameter('dog', $dog)
            ->orderBy('a.createdAt', 'DESC')
            ->addOrderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('adoption/dog_adpot_list.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Dog Adoption Requests',
            'dog' => $dog,
            'adoptions' => $adoptions,
        ]);
    }

    #[Route('/dog/{id}/auto-adopt-match', name: 'app_adoption_auto_adopt_match', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function autoAdoptMatch(
        Dogs $dog,
        HttpClientInterface $httpClient,
        UserRepository $userRepository
    ): JsonResponse {
        $weight = (float) ($dog->getWeight() ?? 0);

        try {
            $response = $httpClient->request('POST', 'http://127.0.0.1:8010/match', [
                'json' => [
                    'dog_id' => (string) $dog->getId(),
                    'weight' => $weight,
                ],
                'timeout' => 12,
            ]);

            $statusCode = $response->getStatusCode();
            $payload = $response->toArray(false);

            if ($statusCode >= 400) {
                return $this->json([
                    'ok' => false,
                    'message' => 'AUTO ADOPT API returned an error.',
                    'api_response' => $payload,
                ], $statusCode);
            }

            $ranked = is_array($payload['users_ranked'] ?? null) ? $payload['users_ranked'] : [];
            $userIds = array_values(array_unique(array_map(
                static fn (array $item): int => (int) ($item['user'] ?? 0),
                $ranked
            )));
            $userIds = array_values(array_filter($userIds, static fn (int $id): bool => $id > 0));

            $usersById = [];
            if ($userIds !== []) {
                $users = $userRepository->createQueryBuilder('u')
                    ->andWhere('u.id IN (:ids)')
                    ->setParameter('ids', $userIds)
                    ->getQuery()
                    ->getResult();

                foreach ($users as $user) {
                    $usersById[$user->getId()] = $user;
                }
            }

            $rankedWithNames = array_map(static function (array $item) use ($usersById): array {
                $userId = (int) ($item['user'] ?? 0);
                $matchedUser = $usersById[$userId] ?? null;

                return [
                    'user_id' => (string) $userId,
                    'name' => $matchedUser ? trim((string) $matchedUser->getFullName()) : ('User #' . $userId),
                    'accuracy' => (float) ($item['accuracy'] ?? 0),
                    'records_used' => (int) ($item['records_used'] ?? 0),
                ];
            }, $ranked);

            return $this->json([
                'ok' => true,
                'dog_id' => (string) ($payload['dog_id'] ?? (string) $dog->getId()),
                'matches_found' => (int) ($payload['matches_found'] ?? count($rankedWithNames)),
                'users_ranked' => $rankedWithNames,
            ]);
        } catch (\Throwable $e) {
            return $this->json([
                'ok' => false,
                'message' => 'Failed to call AUTO ADOPT API.',
                'error' => $e->getMessage(),
            ], Response::HTTP_BAD_GATEWAY);
        }
    }

    #[Route('/dog/{dogId}/adopt-result/{userId}', name: 'app_adoption_result', requirements: ['dogId' => '\\d+', 'userId' => '\\d+'], methods: ['GET'])]
    public function adoptResult(
        int $dogId,
        int $userId,
        DogsRepository $dogsRepository,
        UserRepository $userRepository,
        AdoptionRepository $adoptionRepository,
        Request $request
    ): Response {
        $dog = $dogsRepository->find($dogId);
        $winner = $userRepository->find($userId);

        if (!$dog || !$winner) {
            throw $this->createNotFoundException('Dog or user not found.');
        }

        $adoption = $adoptionRepository->findOneBy([
            'dog' => $dog,
            'user' => $winner,
        ], ['createdAt' => 'DESC']);

        $accuracy = (float) $request->query->get('accuracy', 0);
        $recordsUsed = (int) $request->query->get('records', 0);

        return $this->render('adoption/adopt_result.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Adoption Winner Result',
            'dog' => $dog,
            'winner' => $winner,
            'adoption' => $adoption,
            'accuracy' => $accuracy,
            'records_used' => $recordsUsed,
        ]);
    }

    #[Route('/dog/{id}/user-show', name: 'app_doguser_show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function dogUserShow(Dogs $dog): Response
    {
        return $this->render('adoption/doguser_show.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Dog Information',
            'dog' => $dog,
        ]);
    }

    #[Route('/dog/{dogId}/adopt-result/{userId}/attestation', name: 'app_adoption_attestation_ai', requirements: ['dogId' => '\\d+', 'userId' => '\\d+'], methods: ['POST'])]
    public function generateAttestation(
        int $dogId,
        int $userId,
        DogsRepository $dogsRepository,
        UserRepository $userRepository,
        AdoptionRepository $adoptionRepository,
        GeminiService $geminiService
    ): JsonResponse {
        $dog = $dogsRepository->find($dogId);
        $winner = $userRepository->find($userId);

        if (!$dog || !$winner) {
            return $this->json([
                'ok' => false,
                'message' => 'Dog or winner not found.',
            ], Response::HTTP_NOT_FOUND);
        }

        $adoption = $adoptionRepository->findOneBy([
            'dog' => $dog,
            'user' => $winner,
        ], ['createdAt' => 'DESC']);

        $text = $this->buildAttestationText($dog, $winner, $adoption, $geminiService);

        return $this->json([
            'ok' => true,
            'attestation' => $text,
        ]);
    }

    #[Route('/dog/{dogId}/adopt-result/{userId}/attestation-email', name: 'app_adoption_attestation_email', requirements: ['dogId' => '\\d+', 'userId' => '\\d+'], methods: ['POST'])]
    public function sendAttestationEmail(
        int $dogId,
        int $userId,
        Request $request,
        DogsRepository $dogsRepository,
        UserRepository $userRepository,
        AdoptionRepository $adoptionRepository,
        GeminiService $geminiService,
        MailerInterface $mailer,
        LoggerInterface $logger
    ): JsonResponse {
        $dog = $dogsRepository->find($dogId);
        $winner = $userRepository->find($userId);

        if (!$dog || !$winner) {
            return $this->json([
                'ok' => false,
                'message' => 'Dog or winner not found.',
            ], Response::HTTP_NOT_FOUND);
        }

        $toEmail = (string) ($winner->getEmail() ?? '');
        if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
            return $this->json([
                'ok' => false,
                'message' => 'Winner email is invalid.',
            ], Response::HTTP_BAD_REQUEST);
        }

        $payload = json_decode((string) $request->getContent(), true);
        $attestation = is_array($payload) ? trim((string) ($payload['attestation'] ?? '')) : '';

        if ($attestation === '') {
            $adoption = $adoptionRepository->findOneBy([
                'dog' => $dog,
                'user' => $winner,
            ], ['createdAt' => 'DESC']);
            $attestation = $this->buildAttestationText($dog, $winner, $adoption, $geminiService);
        }

        $fromEmail = $_ENV['MAILER_FROM'] ?? 'aminegaming275@gmail.com';
        if (!filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
            $fromEmail = 'aminegaming275@gmail.com';
        }

        $dogInfoUrl = $this->generateUrl('app_doguser_show', [
            'id' => $dog->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        $message = (new Email())
            ->from($fromEmail)
            ->to($toEmail)
            ->subject('PawTech - Adoption Winner Attestation')
            ->text($attestation . "\n\nDog information page: " . $dogInfoUrl)
            ->html(
                '<div style="font-family:Arial,sans-serif;background:#fff7f0;padding:0;margin:0;">'
                .'<div style="max-width:600px;margin:24px auto;background:#fff;border-radius:12px;border:1px solid #ffd6a0;overflow:hidden;">'
                .'<div style="background:#ff7300;color:#fff;padding:16px 20px;font-size:20px;font-weight:700;">PawTech Adoption</div>'
                .'<div style="padding:20px;white-space:pre-wrap;color:#1f2937;line-height:1.6;">'
                .nl2br(htmlspecialchars($attestation, ENT_QUOTES, 'UTF-8'))
                .'<div style="margin-top:18px;">'
                .'<a href="' . htmlspecialchars($dogInfoUrl, ENT_QUOTES, 'UTF-8') . '" style="display:inline-block;background:#16a34a;color:#ffffff;text-decoration:none;padding:10px 16px;border-radius:8px;font-weight:700;">View Dog Information</a>'
                .'</div>'
                .'</div>'
                .'</div>'
                .'</div>'
            );

        try {
            $mailer->send($message);
        } catch (TransportExceptionInterface $e) {
            $logger->error('Failed to send adoption attestation email.', [
                'error' => $e->getMessage(),
                'to' => $toEmail,
                'user_id' => $winner->getId(),
                'dog_id' => $dog->getId(),
            ]);

            return $this->json([
                'ok' => false,
                'message' => 'Failed to send email.',
            ], Response::HTTP_BAD_GATEWAY);
        }

        return $this->json([
            'ok' => true,
            'message' => 'Attestation email sent successfully.',
            'to' => $toEmail,
        ]);
    }

    private function buildAttestationText(Dogs $dog, $winner, ?Adoption $adoption, GeminiService $geminiService): string
    {
        $prompt = sprintf(
            "Write a complete congratulation attestation in plain text only (no markdown, no **, no bullet points).\nKeep it between 120 and 180 words.\nMust end with a closing line: PawTech Team.\nDog: %s\nBreed: %s\nWinner: %s\nEmail: %s\nPhone: %s\nApplication date: %s",
            (string) ($dog->getName() ?? 'N/A'),
            (string) ($dog->getBreed() ?? 'N/A'),
            trim((string) $winner->getFullName()),
            (string) ($winner->getEmail() ?? 'N/A'),
            (string) ($winner->getPhone() ?? 'N/A'),
            $adoption && $adoption->getCreatedAt() ? $adoption->getCreatedAt()->format('Y-m-d H:i') : 'N/A'
        );

        $raw = (string) ($geminiService->askGemini($prompt) ?? '');
        $text = $this->sanitizeAttestation($raw);

        if ($text === '' || strlen($text) < 120 || stripos($text, 'PawTech Team') === false) {
            return $this->fallbackAttestation($dog, $winner);
        }

        return $text;
    }

    private function sanitizeAttestation(string $text): string
    {
        $clean = trim($text);
        $clean = str_replace(['**', '__', '```'], '', $clean);
        $clean = preg_replace("/\r\n|\r/", "\n", $clean) ?? $clean;
        $clean = preg_replace("/\n{3,}/", "\n\n", $clean) ?? $clean;

        return trim($clean);
    }

    private function fallbackAttestation(Dogs $dog, $winner): string
    {
        $winnerName = trim((string) $winner->getFullName());
        $dogName = (string) ($dog->getName() ?? 'this dog');
        $breed = (string) ($dog->getBreed() ?? 'N/A');

        return "Official Congratulation: Successful Dog Adoption\n\n"
            . "Dear {$winnerName},\n\n"
            . "Congratulations. We are pleased to confirm that you have been selected as the winner for the adoption of {$dogName} ({$breed}). "
            . "Your application demonstrated strong readiness, commitment, and a supportive environment for responsible pet care. "
            . "This result reflects our confidence in your ability to provide a safe, stable, and caring home.\n\n"
            . "Thank you for choosing adoption and for supporting animal welfare through PawTech. We wish you and {$dogName} a healthy and happy future together.\n\n"
            . "PawTech Team";
    }

    #[Route('/new', name: 'app_adoption_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $adoption = new Adoption();
        $adoption->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(AdoptionAdminType::class, $adoption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($adoption);
            $entityManager->flush();

            $this->addFlash('success', 'Adoption created successfully.');

            return $this->redirectToRoute('app_adoption_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adoption/new.html.twig', [
            'active' => 'adoption',
            'page_title' => 'New Adoption',
            'adoption' => $adoption,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adoption_show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function show(Adoption $adoption): Response
    {
        return $this->render('adoption/show.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Adoption',
            'adoption' => $adoption,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_adoption_edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Adoption $adoption, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdoptionAdminType::class, $adoption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Adoption updated successfully.');

            return $this->redirectToRoute('app_adoption_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('adoption/edit.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Edit Adoption',
            'adoption' => $adoption,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_adoption_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(Request $request, Adoption $adoption, EntityManagerInterface $entityManager): Response
    {
        $dogId = (int) $request->getPayload()->get('dog_id', 0);

        if ($this->isCsrfTokenValid('delete' . $adoption->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($adoption);
            $entityManager->flush();

            $this->addFlash('success', 'Adoption deleted successfully.');
        }

        if ($dogId > 0) {
            return $this->redirectToRoute('app_adoption_dog_adpot_list', ['id' => $dogId], Response::HTTP_SEE_OTHER);
        }

        return $this->redirectToRoute('app_adoption_index', [], Response::HTTP_SEE_OTHER);
    }
}
