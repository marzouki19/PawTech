<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class SupabaseService
{
    private HttpClientInterface $client;
    private string $supabaseUrl;
    private string $apiKey;
    private LoggerInterface $logger;

    public function __construct(
        HttpClientInterface $client,
        string $supabaseUrl,
        string $apiKey,
        LoggerInterface $logger
    ) {
        $this->client = $client;
        $this->supabaseUrl = rtrim($supabaseUrl, '/');
        $this->apiKey = $apiKey;
        $this->logger = $logger;
    }

    /**
     * Make a request to Supabase REST API
     */
    private function request(string $method, string $table, array $options = []): array
    {
        $url = $this->supabaseUrl . '/rest/v1/' . $table;

        $headers = [
            'apikey' => $this->apiKey,
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        if (isset($options['query']['select']) && $method !== 'GET') {
            $headers['Prefer'] = 'return=representation';
        }

        try {
            $response = $this->client->request($method, $url, [
                'headers' => $headers,
                'query' => $options['query'] ?? [],
                'json' => $options['json'] ?? null,
                'timeout' => 30,
            ]);

            $data = $response->toArray(false);
            $this->logger->info('Supabase API request', [
                'method' => $method,
                'table' => $table,
                'status' => $response->getStatusCode(),
            ]);

            return $data;
        } catch (\Exception $e) {
            $this->logger->error('Supabase API error', [
                'method' => $method,
                'table' => $table,
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }

    /**
     * Select data from a table
     * 
     * @param string $table Table name
     * @param array $columns Columns to select (default: *)
     * @param array $filters Query filters (column => value, will be converted to eq. format)
     */
    public function select(string $table, array $columns = ['*'], array $filters = []): array
    {
        $query = ['select' => implode(',', $columns)];
        $rawKeys = ['limit', 'offset', 'order'];

        foreach ($filters as $column => $value) {
            $value = (string) $value;

            if (in_array((string) $column, $rawKeys, true) || str_contains((string) $column, '.')) {
                $query[$column] = $value;
                continue;
            }

            if (preg_match('/^(eq|neq|gt|gte|lt|lte|like|ilike|in|is)\./', $value) === 1) {
                $query[$column] = $value;
            } else {
                $query[$column] = 'eq.' . $value;
            }
        }

        return $this->request('GET', $table, ['query' => $query]);
    }

    /**
     * Insert data into a table
     * 
     * @param string $table Table name
     * @param array $data Data to insert
     */
    public function insert(string $table, array $data): array
    {
        return $this->request('POST', $table, [
            'json' => $data,
            'query' => ['select' => '*'],
        ]);
    }

    /**
     * Update data in a table
     * 
     * @param string $table Table name
     * @param array $data Data to update
     * @param array $match Column-value pairs to match rows
     */
    public function update(string $table, array $data, array $match): array
    {
        $query = ['select' => '*'];
        foreach ($match as $column => $value) {
            $query[$column] = 'eq.' . $value;
        }

        return $this->request('PATCH', $table, [
            'json' => $data,
            'query' => $query,
        ]);
    }

    /**
     * Delete data from a table
     * 
     * @param string $table Table name
     * @param array $match Column-value pairs to match rows
     */
    public function delete(string $table, array $match): array
    {
        $query = [];
        foreach ($match as $column => $value) {
            $query[$column] = 'eq.' . $value;
        }

        return $this->request('DELETE', $table, ['query' => $query]);
    }

    /**
     * Check connection to Supabase
     */
    public function ping(): bool
    {
        try {
            $this->request('GET', 'user', ['query' => ['select' => 'id', 'limit' => 1]]);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}