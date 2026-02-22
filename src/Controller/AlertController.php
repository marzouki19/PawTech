<?php

namespace App\Controller;

use App\Entity\Alert;
use App\Form\AlertType;
use App\Repository\AlertRepository;
use App\Repository\ObservationStationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/alerts')]
final class AlertController extends AbstractController
{
    #[Route('', name: 'app_admin_alerts', methods: ['GET'])]
    public function index(
        Request $request,
        AlertRepository $alertRepository,
        ObservationStationRepository $stationRepository
    ): Response
    {
        $type = trim((string) $request->query->get('type', ''));
        $statut = trim((string) $request->query->get('statut', ''));
        $search = trim((string) $request->query->get('search', ''));

        $queryBuilder = $alertRepository->createQueryBuilder('a')
            ->orderBy('a.date', 'DESC');

        if (in_array($type, ['TECHNICAL', 'DANGER_DOG', 'HEALTH_ALERT'], true)) {
            $queryBuilder
                ->andWhere('a.type = :type')
                ->setParameter('type', $type);
        }

        if (in_array($statut, ['unread', 'read'], true)) {
            $queryBuilder
                ->andWhere('a.statut = :statut')
                ->setParameter('statut', $statut);
        }

        if ($search !== '') {
            $queryBuilder
                ->andWhere('a.message LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $alerts = $queryBuilder->getQuery()->getResult();

        return $this->render('alert/index.html.twig', [
            'alerts' => $alerts,
            'inactive_stations' => $stationRepository->findBy(['statut' => 'inactive']),
            'active' => 'alerts',
            'page_title' => 'Alerts',
        ]);
    }

    #[Route('/search', name: 'app_admin_alerts_search', methods: ['GET'])]
    public function search(
        Request $request,
        AlertRepository $alertRepository,
        CsrfTokenManagerInterface $csrfTokenManager
    ): Response
    {
        $searchValue = $request->query->get('searchValue', '');
        
        $queryBuilder = $alertRepository->createQueryBuilder('a');
        
        if (!empty($searchValue)) {
            $queryBuilder->andWhere('a.message LIKE :search OR a.type LIKE :search')
                         ->setParameter('search', '%' . $searchValue . '%');
        }
        
        $alerts = $queryBuilder->getQuery()->getResult();
        
        $result = [];
        foreach ($alerts as $alert) {
            $result[] = [
                'id' => $alert->getId(),
                'type' => $alert->getType(),
                'message' => $alert->getMessage(),
                'prioritee' => $alert->getPrioritee(),
                'statut' => $alert->getStatut(),
                'station_id' => $alert->getStation() ? $alert->getStation()->getId() : null,
                'date' => $alert->getDate() ? $alert->getDate()->format('d/m/Y H:i') : '',
                'show_url' => $this->generateUrl('app_admin_alerts_show', ['id' => $alert->getId()]),
                'edit_url' => $this->generateUrl('app_admin_alerts_edit', ['id' => $alert->getId()]),
                'delete_url' => $this->generateUrl('app_admin_alerts_delete', ['id' => $alert->getId()]),
                'delete_token' => $csrfTokenManager->getToken('delete' . $alert->getId())->getValue(),
            ];
        }
        
        return $this->json($result);
    }

    #[Route('/new', name: 'app_admin_alerts_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $alert = new Alert();
        if (!$alert->getDate()) {
            $alert->setDate(new \DateTime());
        }
        $form = $this->createForm(AlertType::class, $alert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($alert);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_alerts', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('alert/new.html.twig', [
            'alert' => $alert,
            'form' => $form,
            'active' => 'alerts',
            'page_title' => 'New Alert',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_alerts_show', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function show(Alert $alert): Response
    {
        return $this->render('alert/show.html.twig', [
            'alert' => $alert,
            'active' => 'alerts',
            'page_title' => 'Alert Details',
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_alerts_edit', methods: ['GET', 'POST'], requirements: ['id' => '\\d+'])]
    public function edit(Request $request, Alert $alert, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AlertType::class, $alert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_alerts', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('alert/edit.html.twig', [
            'alert' => $alert,
            'form' => $form,
            'active' => 'alerts',
            'page_title' => 'Edit Alert',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_alerts_delete', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function delete(Request $request, Alert $alert, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alert->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($alert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_alerts', [], Response::HTTP_SEE_OTHER);
    }
}
