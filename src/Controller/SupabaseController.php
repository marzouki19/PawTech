<?php

namespace App\Controller;

use App\Service\SupabaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class SupabaseController extends AbstractController
{
    #[Route('/supabase/test', name: 'supabase_test', methods: ['GET'])]
    public function test(SupabaseService $supabase): JsonResponse
    {
        $connected = $supabase->ping();

        return $this->json([
            'status' => $connected ? 'connected' : 'failed',
            'timestamp' => date('c'),
        ]);
    }

    #[Route('/supabase/select/{table}', name: 'supabase_select', methods: ['GET'])]
    public function select(string $table, SupabaseService $supabase): JsonResponse
    {
        try {
            $data = $supabase->select($table, ['*'], ['limit' => 10]);
            return $this->json([
                'table' => $table,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}