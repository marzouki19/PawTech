<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class OpenAIService
{
    private $client;
    private $apiKey;
    private $model;

    public function __construct(HttpClientInterface $client, string $apiKey, string $model = 'gpt-3.5-turbo')
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
        $this->model = $model;
    }

    public function askOpenAI(string $question): ?string
    {
        $url = 'https://api.openai.com/v1/chat/completions';
        $body = [
            'model' => $this->model,
            'messages' => [
                ['role' => 'user', 'content' => $question]
            ],
            'max_tokens' => 256,
            'temperature' => 0.7
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
            if (isset($data['choices'][0]['message']['content'])) {
                return $data['choices'][0]['message']['content'];
            }
            if (isset($data['error']['message'])) {
                return '[OpenAI API error] ' . $data['error']['message'];
            }
            return null;
        } catch (\Exception $e) {
            return '[Exception] ' . $e->getMessage();
        }
    }
}
