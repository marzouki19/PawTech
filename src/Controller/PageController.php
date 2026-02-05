<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class PageController extends AbstractController
{
    #[Route('/home', name: 'app_home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('pages/home.html.twig');
    }

    #[Route('/signin', name: 'app_signin', methods: ['GET', 'POST'])]
    public function signin(): Response
    {
        return $this->render('sign/signin.html.twig');
    }

    #[Route('/auth/google', name: 'app_google_auth_start', methods: ['GET'])]
    public function googleAuthStart(Request $request): Response
    {
        $clientId = $_ENV['GOOGLE_CLIENT_ID'] ?? 'YOUR_GOOGLE_CLIENT_ID';
        $redirectUri = $request->getSchemeAndHttpHost().$this->generateUrl('app_google_auth_callback');

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
            $this->addFlash('error', 'Missing Google authorization code.');
            return $this->redirectToRoute('app_signin');
        }

        $this->addFlash('success', 'Google authorization received. Replace this with token exchange.');
        return $this->redirectToRoute('app_signin');
    }

    

    #[Route('/account', name: 'app_account', methods: ['GET'])]
    public function account(): Response
    {
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/settings', name: 'app_settings', methods: ['GET'])]
    public function settings(): Response
    {
        return $this->redirectToRoute('app_dashboard');
    }

    #[Route('/profile', name: 'app_profile', methods: ['GET'])]
    public function profile(): Response
    {
        return $this->redirectToRoute('app_dashboard');
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

    #[Route('/pages/donation', name: 'app_donation', methods: ['GET'])]
    public function donation(): Response
    {
        return $this->render('pages/donation.html.twig');
    }

    #[Route('/pages/shop', name: 'app_shop', methods: ['GET'])]
    public function shop(): Response
    {
        return $this->render('pages/shop.html.twig');
    }

    #[Route('/pages/veterinarian', name: 'app_veterinarian_page', methods: ['GET'])]
    public function veterinarianPage(): Response
    {
        return $this->render('pages/veterinarian.html.twig');
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
    public function logout(): Response
    {
        return $this->redirectToRoute('app_dashboard');
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

}
