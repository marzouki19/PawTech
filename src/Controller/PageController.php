<?php

namespace App\Controller;
use App\Form\DonationType;
use App\Entity\User;
use App\Entity\Donation;
use App\Repository\UserRepository;
use App\Repository\DogsRepository;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    #[Route('/home', name: 'app_home_alias', methods: ['GET'])]
    public function home(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/signin', name: 'app_signin', methods: ['GET', 'POST'])]
    public function signin(Request $request): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

   

    

    #[Route('/account', name: 'app_account', methods: ['GET'])]
    public function account(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/settings', name: 'app_settings', methods: ['GET', 'POST'])]
    public function settings(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/profile', name: 'app_profile', methods: ['GET'])]
    public function profile(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/my-pets', name: 'app_my_pets', methods: ['GET'])]
    public function myPets(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/pages/about', name: 'app_about', methods: ['GET'])]
    public function about(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/pages/contact', name: 'app_contact', methods: ['GET'])]
    public function contact(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/pages/dogs', name: 'app_dogs', methods: ['GET'])]
    public function dogs(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/pages/events', name: 'app_events', methods: ['GET'])]
    public function events(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/donation', name: 'app_donation')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    //#[Route('/shop', name: 'app_shop', methods: ['GET'])]
    #[Route('/pages/shop', name: 'app_shop', methods: ['GET'])]
    public function shop(Request $request): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/pages/veterinarian', name: 'app_veterinarian_page', methods: ['GET', 'POST'])]
    public function veterinarianPage(UserRepository $userRepository, DogsRepository $dogsRepository, Request $request): Response
    {
        $veterinarians = $userRepository->findVeterinarians();
        $dogs = $dogsRepository->findAll();

        if ($request->isMethod('POST')) {
            // Traiter la demande de rendez-vous
            $appointmentData = $request->request->all();
            
            // Pour l'instant, retourner la page avec un message de succès ou une redirection
            // Vous pouvez ajouter la logique métier appropriée ici
            // (enregistrement en base de données, envoi d'email, etc.)
            
            // Retourner la page avec les vétérinaires et les chiens
            return $this->render('pages/veterinarian.html.twig', [
                'veterinarians' => $veterinarians,
                'dogs' => $dogs,
            ]);
        }

        return $this->render('pages/veterinarian.html.twig', [
            'veterinarians' => $veterinarians,
            'dogs' => $dogs,
        ]);
    }















    

    #[Route('/clients', name: 'app_clients_index', methods: ['GET'])]
    public function clients(): Response
    {
        return $this->redirectToRoute('app_veterinarian_page');
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(Request $request): Response
    {
        $session = $request->getSession();
        $session->remove('user');

        return $this->redirectToRoute('app_veterinarian_page');
    }

    private function renderEntity(
        string $template,
        string $pageTitle,
        string $active,
        array $columns,
        array $rows,
        string $modalTitle,
        array $modalFields,
        ?string $addHref = null,
        array $extra = []
    ): Response {
        return $this->render($template, array_merge([
            'page_title' => $pageTitle,
            'active' => $active,
            'entity_name' => $pageTitle,
            'columns' => $columns,
            'rows' => $rows,
            'modal_title' => $modalTitle,
            'modal_fields' => $modalFields,
            'add_href' => $addHref,
            'total_records' => count($rows),
            'per_page' => 10,
            'page' => 1,
            'total_pages' => 1,
        ], $extra));
    }

    private function handleUserImageUpload(?UploadedFile $uploadedFile, User $user): void
    {
        if ($uploadedFile instanceof UploadedFile) {
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/[^a-zA-Z0-9_-]/', '', $originalFilename) ?: 'user';
            $newFilename = $safeFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadDir = $this->getParameter('kernel.project_dir').'/public/uploads/users';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0775, true);
            }

            $uploadedFile->move($uploadDir, $newFilename);
            $user->setUserImage('uploads/users/'.$newFilename);
        }
    }

}
