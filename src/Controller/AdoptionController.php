<?php

namespace App\Controller;

use App\Entity\Adoption;
use App\Entity\Dogs;
use App\Form\AdoptionAdminType;
use App\Repository\AdoptionRepository;
use App\Repository\DogsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
