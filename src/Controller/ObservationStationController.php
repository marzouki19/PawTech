<?php

namespace App\Controller;

use App\Entity\ObservationStation;
use App\Form\ObservationStationType;
use App\Repository\ObservationStationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

#[Route('/admin/stations')]
final class ObservationStationController extends AbstractController
{
    #[Route('', name: 'app_admin_stations', methods: ['GET'])]
    public function index(ObservationStationRepository $observationStationRepository): Response
    {
        return $this->render('observation_station/index.html.twig', [
            'observation_stations' => $observationStationRepository->findAll(),
            'active' => 'station',
            'page_title' => 'Stations',
        ]);
    }

    #[Route('/new', name: 'app_admin_stations_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $observationStation = new ObservationStation();
        $form = $this->createForm(ObservationStationType::class, $observationStation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($observationStation);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_stations', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('observation_station/new.html.twig', [
            'observation_station' => $observationStation,
            'form' => $form,
            'active' => 'station',
            'page_title' => 'New Station',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_stations_show', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function show(ObservationStation $observationStation): Response
    {
        return $this->render('observation_station/show.html.twig', [
            'observation_station' => $observationStation,
            'active' => 'station',
            'page_title' => 'Station Details',
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_stations_edit', methods: ['GET', 'POST'], requirements: ['id' => '\\d+'])]
    public function edit(Request $request, ObservationStation $observationStation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ObservationStationType::class, $observationStation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_stations', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('observation_station/edit.html.twig', [
            'observation_station' => $observationStation,
            'form' => $form,
            'active' => 'station',
            'page_title' => 'Edit Station',
        ]);
    }

    #[Route('/{id}', name: 'app_admin_stations_delete', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function delete(Request $request, ObservationStation $observationStation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$observationStation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($observationStation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_stations', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'app_admin_stations_search', methods: ['GET'])]
    public function searchStations(
        Request $request,
        NormalizerInterface $normalizer,
        ObservationStationRepository $observationStationRepository
    ): JsonResponse {
        $searchValue = $request->get('searchValue', '');
        $stations = $observationStationRepository->findStationByCode($searchValue);
        $jsonContent = $normalizer->normalize($stations, 'json', ['groups' => 'stations']);

        return new JsonResponse($jsonContent);
    }
}
