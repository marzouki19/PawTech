<?php

namespace App\Controller;

use App\Form\DonationType;
use App\Entity\User;
use App\Entity\Donation;
use App\Repository\UserRepository;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
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
        return $this->render('pages/home.html.twig');
    }

    #[Route('/signin', name: 'app_signin', methods: ['GET', 'POST'])]
    public function signin(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $session = $request->getSession();
        if ($session->has('user')) {
            return $this->redirectToRoute('app_home');
        }

        $error = null;
        $lastEmail = '';

        if ($request->isMethod('POST')) {
            $email = trim((string) $request->request->get('email', ''));
            $password = (string) $request->request->get('password', '');
            $lastEmail = $email;

            if ($email === '' || $password === '') {
                $error = [
                    'messageKey' => 'Email and password are required.',
                    'messageData' => [],
                ];
                return $this->render('sign/signin.html.twig', [
                    'error' => $error,
                    'last_email' => $lastEmail,
                ]);
            }

            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                if (!$passwordHasher->isPasswordValid($user, $password)) {
                    $error = [
                        'messageKey' => 'Invalid email or password.',
                        'messageData' => [],
                    ];
                } else {
                    $roles = $user->getRoles();

                    $session->set('user', [
                        'id' => $user->getId(),
                        'email' => $user->getEmail(),
                        'prenom' => $user->getPrenom(),
                        'nom' => $user->getNom(),
                        'userImage' => $user->getUserImage(),
                        'role' => $roles[0] ?? 'ROLE_USER',
                    ]);

                    return $this->redirectToRoute('app_home');
                }
            } else {
                $username = strtok($email, '@') ?: 'User';
                $firstName = ucfirst($username);

                $user = new User();
                $user->setPrenom($firstName);
                $user->setNom('User');
                $user->setEmail($email);
                $user->setTelephone(0);
                $user->setRole('Client');
                $user->setStatus('Actif');
                $user->setUserImage('uploads/users/default.png');
                $user->setPassword($passwordHasher->hashPassword($user, $password));

                $entityManager->persist($user);
                $entityManager->flush();

                $roles = $user->getRoles();
                $session->set('user', [
                    'id' => $user->getId(),
                    'email' => $user->getEmail(),
                    'prenom' => $user->getPrenom(),
                    'nom' => $user->getNom(),
                    'userImage' => $user->getUserImage(),
                    'role' => $roles[0] ?? 'ROLE_USER',
                ]);

                return $this->redirectToRoute('app_home');
            }
        }

        return $this->render('sign/signin.html.twig', [
            'error' => $error,
            'last_email' => $lastEmail,
        ]);
    }
   

    

    #[Route('/account', name: 'app_account', methods: ['GET'])]
    public function account(): Response
    {
        return $this->redirectToRoute('app_settings');
    }

    #[Route('/settings', name: 'app_settings', methods: ['GET', 'POST'])]
    public function settings(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $sessionUser = $request->getSession()->get('user');
        $userId = is_array($sessionUser) && isset($sessionUser['id']) ? (int) $sessionUser['id'] : null;

        if (!$userId) {
            return $this->redirectToRoute('app_signin');
        }

        $user = $userRepository->find($userId);
        if (!$user) {
            $request->getSession()->remove('user');
            return $this->redirectToRoute('app_signin');
        }

        $formType = class_exists(\App\Form\AccountinfoType::class)
            ? \App\Form\AccountinfoType::class
            : UserType::class;
        $form = $this->createForm($formType, $user, [
            'validation_groups' => ['Default'],
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->has('user_image') ? $form->get('user_image')->getData() : null;
            if ($avatarFile) {
                $this->handleUserImageUpload($avatarFile, $user);
            }

            $entityManager->flush();

            $roles = $user->getRoles();
            $request->getSession()->set('user', [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'userImage' => $user->getUserImage(),
                'role' => $roles[0] ?? 'ROLE_USER',
            ]);

            $this->addFlash('success', 'Profile updated successfully.');
            return $this->redirectToRoute('app_settings');
        }

        return $this->render('accountinfo/account.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/profile', name: 'app_profile', methods: ['GET'])]
    public function profile(): Response
    {
        return $this->redirectToRoute('app_settings');
    }

    #[Route('/my-pets', name: 'app_my_pets', methods: ['GET'])]
    public function myPets(): Response
    {
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/pages/about', name: 'app_about', methods: ['GET'])]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/pages/contact', name: 'app_contact', methods: ['GET'])]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig');
    }

    #[Route('/pages/dogs', name: 'app_dogs', methods: ['GET'])]
    public function dogs(): Response
    {
        return $this->render('pages/dogs.html.twig');
    }

    #[Route('/pages/events', name: 'app_events', methods: ['GET'])]
    public function events(): Response
    {
        return $this->render('pages/events.html.twig');
    }

    #[Route('/donation', name: 'app_donation')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $donation = new Donation();
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($donation);
            $entityManager->flush();

            $this->addFlash('donation_success', 'Thank you for your donation!');
            return $this->redirectToRoute('app_donation');
        }

        // Solution 1: Vérifier si le paramètre existe
        try {
            $stripeKey = $this->getParameter('stripe_public_key');
        } catch (\Exception $e) {
            $stripeKey = ''; // ou une clé de test
            // $stripeKey = 'pk_test_51P...'; // clé de test temporaire
        }

        // Solution 2: Utiliser directement $_ENV
        // $stripeKey = $_ENV['STRIPE_PUBLIC_KEY'] ?? '';

        // Solution 3: Désactiver Stripe si pas configuré
        // $stripeKey = null;

        return $this->render('pages/donation.html.twig', [
            'form' => $form->createView(),
            'stripe_key' => $stripeKey,
        ]);
    }

    //#[Route('/shop', name: 'app_shop', methods: ['GET'])]
    #[Route('/pages/shop', name: 'app_shop', methods: ['GET'])]
    public function shop(
        Request $request,
        ProduitRepository $produitRepository,
        CategorieRepository $categorieRepository
    ): Response
    {
        // Récupérer les paramètres de filtrage
        $search = $request->query->get('search', '');
        $categorieId = $request->query->getInt('categorie', 0); // 0 si non défini
        $minPrice = $request->query->get('min_price', '');
        $maxPrice = $request->query->get('max_price', '');
        $sort = $request->query->get('sort', 'latest');
        
        // Récupérer tous les produits (vous pouvez ajouter la méthode findFiltered plus tard)
        $produits = $produitRepository->findAll();
        
        // Appliquer les filtres manuellement si pas de méthode findFiltered
        if ($categorieId > 0) {
            $produits = array_filter($produits, function($produit) use ($categorieId) {
                return $produit->getCategorie() && $produit->getCategorie()->getId() === $categorieId;
            });
        }
        
        if ($search) {
            $produits = array_filter($produits, function($produit) use ($search) {
                return stripos($produit->getNom(), $search) !== false;
            });
        }
        
        if ($minPrice !== '') {
            $minPrice = (float) $minPrice;
            $produits = array_filter($produits, function($produit) use ($minPrice) {
                return $produit->getPrix() >= $minPrice;
            });
        }
        
        if ($maxPrice !== '') {
            $maxPrice = (float) $maxPrice;
            $produits = array_filter($produits, function($produit) use ($maxPrice) {
                return $produit->getPrix() <= $maxPrice;
            });
        }
        
        // Trier les produits
        switch ($sort) {
            case 'price_low':
                usort($produits, function($a, $b) {
                    return $a->getPrix() <=> $b->getPrix();
                });
                break;
            case 'price_high':
                usort($produits, function($a, $b) {
                    return $b->getPrix() <=> $a->getPrix();
                });
                break;
            case 'name_asc':
                usort($produits, function($a, $b) {
                    return strcmp($a->getNom(), $b->getNom());
                });
                break;
            case 'name_desc':
                usort($produits, function($a, $b) {
                    return strcmp($b->getNom(), $a->getNom());
                });
                break;
            case 'latest':
            default:
                // Garder l'ordre par défaut ou trier par ID décroissant
                usort($produits, function($a, $b) {
                    return $b->getId() <=> $a->getId();
                });
                break;
        }
        
        // Récupérer toutes les catégories
        $categories = $categorieRepository->findAll();
        
        return $this->render('pages/shop.html.twig', [
            'produits' => $produits,
            'categories' => $categories,
            'search' => $search,
            'selectedCategorie' => $categorieId, // <-- AJOUTEZ CETTE LIGNE
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'sort' => $sort,
        ]);
    }


    #[Route('/pages/veterinarian', name: 'app_veterinarian_page', methods: ['GET'])]
    public function veterinarianPage(UserRepository $userRepository): Response
    {
        $veterinarians = $userRepository->findVeterinarians();

        return $this->render('pages/veterinarian.html.twig', [
            'veterinarians' => $veterinarians,
        ]);
    }















    

    #[Route('/clients', name: 'app_clients_index', methods: ['GET'])]
    public function clients(): Response
    {
        return $this->renderEntity('clients/index.html.twig', 'Clients', 'clients', [
            'Client ID', 'Name', 'Email', 'Phone', 'Status',
        ], [], 'Add New Client', [
            ['name' => 'name', 'placeholder' => 'Client name'],
            ['name' => 'email', 'type' => 'email', 'placeholder' => 'Email address'],
            ['name' => 'phone', 'placeholder' => 'Phone number'],
        ]);
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(Request $request): Response
    {
        $session = $request->getSession();
        $session->remove('user');

        return $this->redirectToRoute('app_home');
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
