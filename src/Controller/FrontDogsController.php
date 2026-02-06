<?php

namespace App\Controller;

use App\Entity\Dogs;
use App\Repository\DogsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontDogsController extends AbstractController
{
    #[Route('/front_dogs/dogs', name: 'app_front_dogs', methods: ['GET'])]
    #[Route('/dogs', name: 'app_dogs', methods: ['GET'])]
    public function index(DogsRepository $dogsRepository): Response
    {
        // Only show dogs with adoption status 'Available' on the front page
        $dogs = $dogsRepository->findBy(['adoption_status' => 'Available'], ['name' => 'ASC']);

        return $this->render('front_dogs/dogs.html.twig', [
            'dogs' => $dogs,
        ]);
    }

    #[Route('/front_dogs/dogs/{id}', name: 'app_front_dogs_show', methods: ['GET'])]
    public function show(Dogs $dog): Response
    {
        return $this->render('front_dogs/show.html.twig', [
            'dog' => $dog,
        ]);
    }
}
