<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class FormLoginAuthenticator extends AbstractAuthenticator implements AuthenticationEntryPointInterface
{
    public function __construct(
        private UserRepository $userRepository,
        private UserPasswordHasherInterface $passwordHasher,
        private CsrfTokenManagerInterface $csrfTokenManager,
    ) {
    }

    public function supports(Request $request): ?bool
    {
        return $request->isMethod('POST') && $request->getPathInfo() === '/supabase/signin';
    }

    public function authenticate(Request $request): Passport
    {
        $email = (string) $request->request->get('email', '');
        $password = (string) $request->request->get('password', '');
        $csrfToken = (string) $request->request->get('_csrf_token', '');

        if (empty($email)) {
            throw new BadCredentialsException('Email cannot be empty.');
        }

        if (empty($password)) {
            throw new BadCredentialsException('Password cannot be empty.');
        }

        // Validate CSRF token
        $token = new CsrfToken('authenticate', $csrfToken);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException('CSRF token is invalid.');
        }

        // Find user by email
        $user = $this->userRepository->findOneBy(['email' => $email]);
        if (!$user) {
            throw new UserNotFoundException(sprintf('User with email "%s" not found.', $email));
        }

        // Validate user status
        if ($user->getStatus() !== 'Actif' && $user->getStatus() !== 'actif') {
            throw new AuthenticationException('User account is not active.');
        }

        // Create passport with credentials badge and remember me badge
        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $csrfToken),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $user = $token->getUser();
        if ($user instanceof User) {
            // Store user data in session for backwards compatibility
            $request->getSession()->set('user', [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'prenom' => $user->getPrenom(),
                'nom' => $user->getNom(),
                'userImage' => $user->getUserImage(),
                'role' => $user->getRoles()[0] ?? 'ROLE_USER',
            ]);
        }

        // Remember the email for next login
        $request->getSession()->set('_security.last_email', $user->getEmail());

        // Redirect to originally requested page or home
        $targetPath = $request->getSession()->get('_security.main.target_path');
        if ($targetPath) {
            $request->getSession()->remove('_security.main.target_path');
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse('/');
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        // Store the error in session for the next request
        $request->getSession()->set('_security.main.last_authentication_error', $exception);

        return new RedirectResponse('/supabase/signin');
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        // Redirect to signin page
        return new Response(null, Response::HTTP_FOUND, ['Location' => '/supabase/signin']);
    }
}
