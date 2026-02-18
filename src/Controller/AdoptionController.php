<?php

namespace App\Controller;

use App\Entity\Adoption;
use App\Form\AdoptionAdminType;
use App\Repository\AdoptionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/adoption')]
final class AdoptionController extends AbstractController
{
    #[Route(name: 'app_adoption_index', methods: ['GET'])]
    public function index(Request $request, AdoptionRepository $adoptionRepository): Response
    {
        $housingFilter = $request->query->get('housing');

        $queryBuilder = $adoptionRepository->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->leftJoin('a.dog', 'd')
            ->addSelect('u', 'd')
            ->orderBy('a.createdAt', 'DESC')
            ->addOrderBy('a.id', 'DESC');

        if (in_array($housingFilter, ['apartment', 'house', 'farm', 'other'], true)) {
            $queryBuilder->andWhere('a.housingType = :housing')->setParameter('housing', $housingFilter);
        } else {
            $housingFilter = null;
        }

        $adoptions = $queryBuilder->getQuery()->getResult();

        $totalCount = (int) $adoptionRepository->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $withYardCount = (int) $adoptionRepository->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->andWhere('a.hasYard = :yard')
            ->setParameter('yard', true)
            ->getQuery()
            ->getSingleScalarResult();

        $withoutYardCount = max(0, $totalCount - $withYardCount);

        return $this->render('adoption/index.html.twig', [
            'active' => 'adoption',
            'page_title' => 'Adoptions',
            'adoptions' => $adoptions,
            'current_housing' => $housingFilter,
            'total_records' => $totalCount,
            'with_yard_records' => $withYardCount,
            'without_yard_records' => $withoutYardCount,
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
        if ($this->isCsrfTokenValid('delete' . $adoption->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($adoption);
            $entityManager->flush();

            $this->addFlash('success', 'Adoption deleted successfully.');
        }

        return $this->redirectToRoute('app_adoption_index', [], Response::HTTP_SEE_OTHER);
    }
}
