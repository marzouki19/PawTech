<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SigninType;
use App\Service\SupabaseUserRepository;
use App\Service\JwtTokenService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class SupabaseAuthController extends AbstractController
{
    #[Route('/supabase/signin', name: 'supabase_signin', methods: ['GET', 'POST'])]
    public function signin(Request $request): Response {
        // If user is already authenticated, redirect to home
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $lastEmail = $request->getSession()->get('_security.last_email', '');
        $error = null;

        // Get authentication error if any
        if ($request->getSession()->has('_security.main.last_authentication_error')) {
            $error = $request->getSession()->get('_security.main.last_authentication_error');
            $request->getSession()->remove('_security.main.last_authentication_error');
        }

        return $this->render('sign/signin.html.twig', [
            'last_email' => $lastEmail,
            'error' => $error,
        ]);
    }

    #[Route('/supabase/signin-check', name: 'supabase_signin_check', methods: ['POST'])]
    public function signinCheck(): Response {
        // This route is handled by Symfony's form_login authenticator
        // It should never be reached directly
        throw new \LogicException('This code should not be reached.');
    }

    #[Route('/supabase/logout', name: 'supabase_logout', methods: ['GET'])]
    public function logout(Request $request, JwtTokenService $jwtTokenService): Response
    {
        $request->getSession()->remove('user');

        return $jwtTokenService->clearAuthCookie($this->redirectToRoute('app_home'), $request->isSecure());
    }

    #[Route('/supabase/signup', name: 'supabase_signup', methods: ['GET', 'POST'])]
    public function signup(
        Request $request,
        SupabaseUserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
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

            if ($data['prenom'] === '') {
                $errors['prenom'] = 'The first name cannot be empty.';
            }
            if ($data['nom'] === '') {
                $errors['nom'] = 'The last name cannot be empty.';
            }
            if ($data['email'] === '') {
                $errors['email'] = 'The email cannot be empty.';
            }
            if ($password === '') {
                $errors['password'] = 'The password cannot be empty.';
            }
            if ($password !== $confirmPassword) {
                $errors['confirm_password'] = 'Passwords do not match.';
            }

            if (empty($errors)) {
                $user = new User();
                $user->setPrenom($data['prenom']);
                $user->setNom($data['nom']);
                $user->setEmail($data['email']);
                $user->setTelephone((int) $data['telephone']);
                $user->setRole('Client');
                $user->setStatus('Actif');
                $user->setUserImage('uploads/users/default.png');
                $user->setPassword($passwordHasher->hashPassword($user, $password));

                if ($userRepository->save($user)) {
                    return $this->redirectToRoute('supabase_signin');
                }
                $errors['save'] = 'Failed to create account.';
            }
        }

        return $this->render('sign/signup.html.twig', [
            'signup_errors' => $errors,
            'signup_data' => $data,
        ]);
    }
}