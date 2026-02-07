<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Dogs;
use App\Repository\DogsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

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



    #[Route('/adopt/{id}', name: 'app_dogs_adopt', methods: ['POST'])]
    public function adopt(Dogs $dog, EntityManagerInterface $entityManager, Request $request): Response 
    {
        $sessionUser = $request->getSession()->get('user');

        if (!$sessionUser) {
            $this->addFlash('error', 'You must be logged in to adopt a dog.');
            return $this->redirectToRoute('app_login');
        }

        // Since $sessionUser is an array, we access 'id' via brackets []
        // We add a null coalescing check just in case 'id' is missing
        $userId = is_array($sessionUser) ? ($sessionUser['id'] ?? null) : $sessionUser->getId();

        if (!$userId) {
            $this->addFlash('error', 'User session data is corrupted.');
            return $this->redirectToRoute('app_login');
        }

        $userRepo = $entityManager->getRepository(User::class);
        $activeUser = $userRepo->find($userId);

        if ($activeUser) {
            // Linking the entity object to the dog object
            $dog->setUser($activeUser);
            $dog->setAdoptionStatus('Adopted');
            
            $entityManager->flush();
            $this->addFlash('success', 'Congratulations! Dog adopted successfully!');
        } else {
            $this->addFlash('error', 'We could not find your user profile in the database.');
        }

        return $this->redirectToRoute('app_front_dogs_show', ['id' => $dog->getId()]);
    }
}
