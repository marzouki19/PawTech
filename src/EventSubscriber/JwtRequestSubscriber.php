<?php

namespace App\EventSubscriber;

use App\Service\JwtTokenService;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class JwtRequestSubscriber implements EventSubscriberInterface
{
    private const PUBLIC_ROUTES = [
        'app_home',
        'app_home_alias',
        'app_signin_page',
        'app_signin',
        'app_signup',
        'app_about',
        'app_contact',
        'app_dogs',
        'app_events',
        'app_donation',
        'app_forgot_password',
        'app_verify_reset',
        'app_reset_password',
        'app_google_auth_start',
        'app_google_auth_callback',
        'supabase_signin',
        'supabase_signup',
        'supabase_logout',
        'app_logout',
        '_wdt',
        '_profiler',
    ];

    public function __construct(private readonly JwtTokenService $jwtTokenService)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::REQUEST => ['onKernelRequest', 20]];
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $route = (string) $request->attributes->get('_route', '');

        if ($route === '' || in_array($route, self::PUBLIC_ROUTES, true) || str_starts_with($route, '_')) {
            return;
        }

        $token = $request->cookies->get('pawtech_jwt');
        if (!$token) {
            $authorization = (string) $request->headers->get('Authorization', '');
            if (str_starts_with($authorization, 'Bearer ')) {
                $token = trim(substr($authorization, 7));
            }
        }

        $claims = $this->jwtTokenService->decodeToken($token);
        if (!$claims) {
            $event->setResponse(new RedirectResponse('/signin'));
            return;
        }

        $request->getSession()->set('user', [
            'id' => isset($claims['sub']) ? (int) $claims['sub'] : null,
            'email' => $claims['email'] ?? null,
            'prenom' => $claims['prenom'] ?? null,
            'nom' => $claims['nom'] ?? null,
            'role' => $claims['role'] ?? 'ROLE_USER',
            'userImage' => $claims['userImage'] ?? 'uploads/users/default.png',
        ]);
    }
}