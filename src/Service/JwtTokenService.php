<?php

namespace App\Service;

use App\Entity\User;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;

class JwtTokenService
{
    public const COOKIE_NAME = 'pawtech_jwt';
    public const TOKEN_ALGORITHM = 'HS256';
    public const DEFAULT_TTL = 86400; // 24 hours
    public const REFRESH_TTL = 604800; // 7 days
    private const ISSUER = 'pawtech-app';
    private const AUDIENCE = 'pawtech-users';

    public function __construct(
        private readonly string $secret,
        private readonly string $appEnv = 'dev'
    ) {
        // Validate secret is strong enough
        if (strlen($this->secret) < 32) {
            throw new \InvalidArgumentException('JWT secret must be at least 32 characters long for HS256');
        }
    }

    /**
     * Issue a new JWT token with enhanced security claims
     */
    public function issueToken(User $user, int $ttlSeconds = self::DEFAULT_TTL): string
    {
        $now = time();
        $jti = bin2hex(random_bytes(16)); // Unique token ID for revocation support

        $payload = [
            'jti' => $jti,                                          // JWT ID for revocation support
            'iss' => self::ISSUER,                                  // Issuer
            'aud' => self::AUDIENCE,                                // Audience
            'sub' => (string) ($user->getId() ?? ''),               // Subject (user ID)
            'email' => $user->getEmail(),                           // User email
            'prenom' => $user->getPrenom(),                         // First name
            'nom' => $user->getNom(),                               // Last name
            'role' => $user->getRoles()[0] ?? 'ROLE_USER',          // Primary role
            'roles' => $user->getRoles(),                           // All roles
            'iat' => $now,                                          // Issued at
            'nbf' => $now,                                          // Not before
            'exp' => $now + $ttlSeconds,                            // Expiration
            'typ' => 'JWT',                                         // Type
        ];

        try {
            return JWT::encode($payload, $this->secret, self::TOKEN_ALGORITHM);
        } catch (\Throwable $e) {
            throw new \RuntimeException('Failed to encode JWT token: ' . $e->getMessage(), 0, $e);
        }
    }

    /**
     * Issue a refresh token with extended TTL
     */
    public function issueRefreshToken(User $user): string
    {
        return $this->issueToken($user, self::REFRESH_TTL);
    }

    /**
     * Decode and validate JWT token with comprehensive verification
     */
    public function decodeToken(?string $token): ?array
    {
        if (!$token || !is_string($token) || strlen($token) === 0) {
            return null;
        }

        try {
            $decoded = JWT::decode($token, new Key($this->secret, self::TOKEN_ALGORITHM));
            
            // Additional validation
            $decodedArray = json_decode(json_encode($decoded, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR);

            // Validate issuer
            if (($decodedArray['iss'] ?? null) !== self::ISSUER) {
                return null;
            }

            // Validate audience
            if (($decodedArray['aud'] ?? null) !== self::AUDIENCE) {
                return null;
            }

            // Validate subject exists
            if (empty($decodedArray['sub'])) {
                return null;
            }

            return $decodedArray;
        } catch (\Throwable $e) {
            // Log failed decoding in production
            if ($this->appEnv === 'prod') {
                // TODO: Add logging
                // $this->logger->warning('JWT decode failed: ' . $e->getMessage());
            }
            return null;
        }
    }

    /**
     * Validate token signature and claims without decoding payload
     */
    public function validateTokenSignature(string $token): bool
    {
        try {
            JWT::decode($token, new Key($this->secret, self::TOKEN_ALGORITHM));
            return true;
        } catch (\Throwable) {
            return false;
        }
    }

    /**
     * Attach JWT as HTTP-only secure cookie
     */
    public function attachAuthCookie(
        Response $response,
        User $user,
        bool $secure = false,
        int $ttlSeconds = self::DEFAULT_TTL
    ): Response {
        $token = $this->issueToken($user, $ttlSeconds);

        $cookie = Cookie::create(self::COOKIE_NAME)
            ->withValue($token)
            ->withExpires(time() + $ttlSeconds)
            ->withPath('/')
            ->withHttpOnly(true)                        // Prevent JavaScript access
            ->withSecure($secure)                       // HTTPS only in production
            ->withSameSite(Cookie::SAMESITE_LAX)        // CSRF protection
            ->withDomain(null);                         // Current domain only

        $response->headers->setCookie($cookie);

        return $response;
    }

    /**
     * Clear authentication cookie securely
     */
    public function clearAuthCookie(Response $response, bool $secure = false): Response
    {
        $cookie = Cookie::create(self::COOKIE_NAME)
            ->withPath('/')
            ->withHttpOnly(true)
            ->withSecure($secure)
            ->withSameSite(Cookie::SAMESITE_LAX)
            ->withExpires(1)                            // Expire immediately
            ->withDomain(null);

        $response->headers->clearCookie(
            self::COOKIE_NAME,
            '/',
            null,
            $secure,
            true,
            Cookie::SAMESITE_LAX
        );

        return $response;
    }

    /**
     * Get token expiration time from token string (without verification)
     */
    public function getTokenExpiration(?string $token): ?\DateTimeImmutable
    {
        if (!$token) {
            return null;
        }

        try {
            // Decode without verification to get exp claim quickly
            $parts = explode('.', $token);
            if (count($parts) !== 3) {
                return null;
            }

            $payload = json_decode(
                base64_decode(strtr($parts[1], '-_', '+/'), true),
                true
            );

            if (!isset($payload['exp'])) {
                return null;
            }

            return new \DateTimeImmutable('@' . $payload['exp']);
        } catch (\Throwable) {
            return null;
        }
    }

    /**
     * Check if token is expired
     */
    public function isTokenExpired(?string $token): bool
    {
        $expiration = $this->getTokenExpiration($token);
        return $expiration === null || $expiration <= new \DateTimeImmutable();
    }
}