<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class HuggingFaceService
{
    private $client;
    private $apiKey;
    private $model;

    public function __construct(HttpClientInterface $client, string $apiKey, string $model = 'HuggingFaceH4/zephyr-7b-beta')
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->model = $model;
    }

    public function askHuggingFace(string $question): ?string
    {
        $url = 'https://api-inference.huggingface.co/models/' . $this->model;
        $body = [
            'inputs' => $question,
        ];
        try {
            $response = $this->client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => $body,
            ]);
            $data = $response->toArray(false);
            if (isset($data[0]['generated_text'])) {
                return $data[0]['generated_text'];
            }
            if (isset($data['error'])) {
                return '[HuggingFace API error] ' . $data['error'];
            }
            return $data[0]['generated_text'] ?? null;
        } catch (\Exception $e) {
            return '[Exception] ' . $e->getMessage();
        }
    }
}
