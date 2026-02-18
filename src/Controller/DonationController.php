<?php

namespace App\Controller;

use App\Entity\Donation;
use App\Form\DonationType;
use App\Repository\DonationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/dashboard/donations')]
final class DonationController extends AbstractController
{
    #[Route('', name: 'app_donation_index', methods: ['GET'])]
    public function index(Request $request, DonationRepository $donationRepository): Response
    {
        $statusFilter = $request->query->get('status');

        $queryBuilder = $donationRepository->createQueryBuilder('d')
            ->orderBy('d.date', 'DESC')
            ->addOrderBy('d.id', 'DESC');

        if ($statusFilter === 'validated') {
            $queryBuilder->andWhere('d.statut = :status')->setParameter('status', true);
        } elseif ($statusFilter === 'pending') {
            $queryBuilder->andWhere('d.statut = :status')->setParameter('status', false);
        }

        $donations = $queryBuilder->getQuery()->getResult();

        $allCount = (int) $donationRepository->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $validatedCount = (int) $donationRepository->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->andWhere('d.statut = :status')
            ->setParameter('status', true)
            ->getQuery()
            ->getSingleScalarResult();

        $pendingCount = max(0, $allCount - $validatedCount);

        return $this->render('donation/index.html.twig', [
            'active' => 'donations',
            'page_title' => 'Donations',
            'donations' => $donations,
            'current_status' => $statusFilter,
            'total_records' => $allCount,
            'validated_records' => $validatedCount,
            'pending_records' => $pendingCount,
        ]);
    }

    #[Route('/new', name: 'app_donation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $donation = new Donation();
        $donation->setDate(new \DateTimeImmutable());

        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($donation);
            $entityManager->flush();

            $this->addFlash('success', 'Donation created successfully.');

            return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('donation/new.html.twig', [
            'active' => 'donations',
            'page_title' => 'New Donation',
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_donation_show', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function show(Donation $donation): Response
    {
        return $this->render('donation/show.html.twig', [
            'active' => 'donations',
            'page_title' => 'Donation',
            'donation' => $donation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_donation_edit', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Donation $donation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Donation updated successfully.');

            return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('donation/edit.html.twig', [
            'active' => 'donations',
            'page_title' => 'Edit Donation',
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_donation_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(Request $request, Donation $donation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $donation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($donation);
            $entityManager->flush();

            $this->addFlash('success', 'Donation deleted successfully.');
        }

        return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
    }
}
