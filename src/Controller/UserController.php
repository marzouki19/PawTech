<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
final class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/users', name: 'app_users_index', methods: ['GET', 'POST'])]
    public function users(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher): Response
    {
        $searchQuery = trim((string) $request->query->get('q', ''));
        $searchField = (string) $request->query->get('field', 'all');
        $sortDir = strtolower((string) $request->query->get('sort', 'asc'));
        $sortBy = (string) $request->query->get('sort_by', 'id');
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->hashUserPassword($user, $form->get('password')->getData(), $passwordHasher);
            $this->handleUserImageUpload($form->get('user_image')->getData(), $user, $slugger);
            $this->applyRoleNulls($user);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_users_index');
        }

        $users = $searchQuery === ''
            ? $userRepository->sortAll($sortDir, $sortBy)
            : $userRepository->search($searchQuery, $searchField);
        [$cardRows, $tableRows] = $this->buildUserRows($users);

        return $this->renderEntity('users/index.html.twig', 'Users', 'users', [
            'ID', 'First Name', 'Last Name', 'Email', 'Phone', 'Role', 'Status',
        ], $tableRows, 'Add New User', [
            ['name' => 'first_name', 'placeholder' => 'First name'],
            ['name' => 'last_name', 'placeholder' => 'Last name'],
            ['name' => 'email', 'type' => 'email', 'placeholder' => 'Email address'],
        ], null, [
            'form' => $form->createView(),
            'card_rows' => $cardRows,
            'search_query' => $searchQuery,
            'search_field' => $searchField,
            'sort_dir' => $sortDir,
            'sort_by' => $sortBy,
        ]);
    }




    #[Route('/user/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->hashUserPassword($user, $form->get('password')->getData(), $passwordHasher);
            $this->handleUserImageUpload($form->get('user_image')->getData(), $user, $slugger);
            $this->applyRoleNulls($user);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }



    
    #[Route('/user/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }





    #[Route('/user/edit/{id}', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ManagerRegistry $managerRegistry, UserRepository $userRepository, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher, int $id): Response
    {
        $entityManager = $managerRegistry->getManager();
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $currentPassword = $user->getPassword();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('password')->getData();
            if (!$plainPassword) {
                $user->setPassword($currentPassword);
            } else {
                $this->hashUserPassword($user, $plainPassword, $passwordHasher);
            }
            $this->handleUserImageUpload($form->get('user_image')->getData(), $user, $slugger);
            $this->applyRoleNulls($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }






    #[Route('/user/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_users_index', [], Response::HTTP_SEE_OTHER);
    }



    
    #[Route('/users/edit/{id}', name: 'app_users_edit', methods: ['GET', 'POST'])]
    public function editUser(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, SluggerInterface $slugger, UserPasswordHasherInterface $passwordHasher, int $id): Response
    {
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $currentPassword = $user->getPassword();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('password')->getData();
            if (!$plainPassword) {
                $user->setPassword($currentPassword);
            } else {
                $this->hashUserPassword($user, $plainPassword, $passwordHasher);
            }
            $this->handleUserImageUpload($form->get('user_image')->getData(), $user, $slugger);
            $this->applyRoleNulls($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_users_index');
        }

        [$cardRows, $tableRows] = $this->buildUserRows($userRepository->findAll());

        return $this->renderEntity('users/index.html.twig', 'Users', 'users', [
            'ID', 'First Name', 'Last Name', 'Email', 'Phone', 'Role', 'Status',
        ], $tableRows, 'Add New User', [
            ['name' => 'first_name', 'placeholder' => 'First name'],
            ['name' => 'last_name', 'placeholder' => 'Last name'],
            ['name' => 'email', 'type' => 'email', 'placeholder' => 'Email address'],
        ], null, [
            'edit_mode' => true,
            'edit_form' => $form->createView(),
            'card_rows' => $cardRows,
        ]);
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

    private function handleUserImageUpload(?UploadedFile $uploadedFile, User $user, SluggerInterface $slugger): void
    {
        if ($uploadedFile instanceof UploadedFile) {
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadDir = $this->getParameter('kernel.project_dir').'/public/uploads/users';

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0775, true);
            }

            $uploadedFile->move($uploadDir, $newFilename);
            $user->setUserImage('uploads/users/'.$newFilename);
            return;
        }

        if (!$user->getUserImage()) {
            $user->setUserImage('uploads/users/default-user.png');
        }
    }

    private function hashUserPassword(User $user, ?string $plainPassword, UserPasswordHasherInterface $passwordHasher): void
    {
        if (!$plainPassword) {
            return;
        }

        $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
    }

    private function applyRoleNulls(User $user): void
    {
        $role = $user->getRole();

        if ($role === 'Veterinaire') {
            $user->setMatricule(null);
            $user->setZoneAffectee(null);
        }

        if ($role === 'Agent Municipale') {
            $user->setOrderNumber(null);
        }

        if ($role === 'Client') {
            $user->setOrderNumber(null);
            $user->setMatricule(null);
            $user->setZoneAffectee(null);
        }
    }

    private function buildUserRows(array $users): array
    {
        $cardRows = array_map(static function ($user) {
            return [
                $user->getId(),
                $user->getPrenom(),
                $user->getNom(),
                $user->getEmail(),
                $user->getTelephone(),
                $user->getRole(),
                $user->getStatus(),
                $user->getUserImage(),
            ];
        }, $users);

        $tableRows = array_map(static function ($user) {
            return [
                $user->getId(),
                $user->getPrenom(),
                $user->getNom(),
                $user->getEmail(),
                $user->getTelephone(),
                $user->getRole(),
                $user->getStatus(),
            ];
        }, $users);

        return [$cardRows, $tableRows];
    }














    #[Route('/signup', name: 'app_signup', methods: ['GET', 'POST'])]
    public function signup(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $errors = [];
        $data = [
            'prenom' => '',
            'nom' => '',
            'email' => '',
            'telephone' => '',
        ];

        if ($request->isMethod('POST')) {
            $data['prenom'] = trim((string) $request->request->get('prenom', ''));
            $data['nom'] = trim((string) $request->request->get('nom', ''));
            $data['email'] = trim((string) $request->request->get('email', ''));
            $data['telephone'] = trim((string) $request->request->get('telephone', ''));
            $password = (string) $request->request->get('password', '');
            $confirmPassword = (string) $request->request->get('confirm_password', '');
            $agreeTerms = (bool) $request->request->get('agree_terms', false);

            if ($data['prenom'] === '') {
                $errors['prenom'] = 'The first name cannot be empty.';
            }
            if ($data['nom'] === '') {
                $errors['nom'] = 'The last name cannot be empty.';
            }
            if ($data['email'] === '') {
                $errors['email'] = 'The email cannot be empty.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Please enter a valid email address.';
            }
            if ($data['telephone'] === '') {
                $errors['telephone'] = 'The phone number cannot be empty.';
            }
            if ($password === '') {
                $errors['password'] = 'The password cannot be empty.';
            } elseif (strlen($password) < 6) {
                $errors['password'] = 'Password must be at least 6 characters.';
            }
            if ($confirmPassword === '') {
                $errors['confirm_password'] = 'Please confirm your password.';
            } elseif ($password !== $confirmPassword) {
                $errors['confirm_password'] = 'Passwords do not match.';
            }
            if (!$agreeTerms) {
                $errors['agree_terms'] = 'You must agree to the terms.';
            }

            if ($errors === []) {
                $user = new User();
                $user->setPrenom($data['prenom']);
                $user->setNom($data['nom']);
                $user->setEmail($data['email']);
                $user->setTelephone((int) $data['telephone']);
                $user->setRole('Client');
                $user->setStatus('Actif');
                $user->setUserImage('uploads/users/default.png');
                $user->setPassword($passwordHasher->hashPassword($user, $password));

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_signin');
            }
        }

        return $this->render('sign/signup.html.twig', [
            'signup_errors' => $errors,
            'signup_data' => $data,
        ]);
    }















  #[Route('/auth/google', name: 'app_google_auth_start', methods: ['GET'])]
    public function googleAuthStart(Request $request): Response
    {
        $clientId = $_ENV['GOOGLE_CLIENT_ID'] ?? 'YOUR_GOOGLE_CLIENT_ID';
        $redirectUri = $_ENV['GOOGLE_REDIRECT_URI']
            ?? $request->getSchemeAndHttpHost().$this->generateUrl('app_google_auth_callback');

        $params = http_build_query([
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'response_type' => 'code',
            'scope' => 'openid email profile',
            'access_type' => 'online',
            'prompt' => 'select_account',
        ]);

        return $this->redirect('https://accounts.google.com/o/oauth2/v2/auth?'.$params);
    }

    #[Route('/auth/google/callback', name: 'app_google_auth_callback', methods: ['GET'])]
    public function googleAuthCallback(Request $request): Response
    {
        if ($request->query->get('error')) {
            $this->addFlash('error', 'Google sign-in was cancelled.');
            return $this->redirectToRoute('app_signin');
        }

        if (!$request->query->get('code')) {
            $this->addFlash('error', 'Missing Google authorization code. Please try again.');
            return $this->redirectToRoute('app_google_auth_start');
        }

        $this->addFlash('success', 'Google authorization received. Replace this with token exchange.');
        return $this->redirectToRoute('app_signin');
    }







    
}