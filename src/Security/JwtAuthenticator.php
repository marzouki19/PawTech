<?php

namespace App\Security;

use App\Service\JwtTokenService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class JwtAuthenticator extends AbstractAuthenticator
{
    public function __construct(private readonly JwtTokenService $jwtTokenService)
    {
    }

    public function supports(Request $request): ?bool
    {
        $token = $this->extractToken($request);
        return $token !== null;
    }

    public function authenticate(Request $request): Passport
    {
        $token = $this->extractToken($request);

        if ($token === null) {
            throw new CustomUserMessageAuthenticationException('No JWT token found');
        }

        $claims = $this->jwtTokenService->decodeToken($token);

        if (!$claims) {
            throw new CustomUserMessageAuthenticationException('Invalid or expired JWT token');
        }

        // Verify token hasn't expired
        if (isset($claims['exp']) && $claims['exp'] < time()) {
            throw new CustomUserMessageAuthenticationException('JWT token has expired');
        }

        // Verify token is valid from
        if (isset($claims['nbf']) && $claims['nbf'] > time()) {
            throw new CustomUserMessageAuthenticationException('JWT token not yet valid');
        }

        $userEmail = $claims['email'] ?? null;

        if (!$userEmail) {
            throw new CustomUserMessageAuthenticationException('Invalid JWT payload');
        }

        return new SelfValidatingPassport(
            new UserBadge($userEmail, function ($userIdentifier) {
                // Return a User object or null if not found
                // The security system will handle the rest
                return null;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return null; // Let the request continue
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return new Response('Unauthorized', Response::HTTP_UNAUTHORIZED);
    }

    private function extractToken(Request $request): ?string
    {
        // Try to get token from cookie
        if ($cookie = $request->cookies->get('pawtech_jwt')) {
            return $cookie;
        }

        // Try to get token from Authorization header
        $authHeader = $request->headers->get('Authorization', '');

        if (str_starts_with($authHeader, 'Bearer ')) {
            return trim(substr($authHeader, 7));
        }

        return null;
    }
}
