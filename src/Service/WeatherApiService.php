<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Fetches weather data from OpenWeatherMap API for event cities.
 * Forecast available only for events within 5 days.
 */
class WeatherApiService
{
    private const CURRENT_WEATHER_URL = 'https://api.openweathermap.org/data/2.5/weather';
    private const FORECAST_URL = 'https://api.openweathermap.org/data/2.5/forecast';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly ?string $apiKey
    ) {
    }

    /**
     * Get weather for a city. If eventDate is within 5 days, returns forecast; otherwise returns unavailable.
     *
     * @return array{temp: float, description: string, icon: string, humidity: int, wind_speed: float}|array{unavailable: true, reason: string}
     */
    public function getWeatherForCity(string $city, ?\DateTimeInterface $eventDate = null): array
    {
        if (!$this->apiKey || trim($this->apiKey) === '') {
            return ['unavailable' => true, 'reason' => 'api_key_missing'];
        }

        $city = trim($city);
        if ($city === '') {
            return ['unavailable' => true, 'reason' => 'city_missing'];
        }

        $now = new \DateTimeImmutable('today');
        if ($eventDate !== null) {
            $eventDateTime = \DateTimeImmutable::createFromInterface($eventDate);
            if ($eventDateTime < $now) {
                return ['unavailable' => true, 'reason' => 'date_past'];
            }
            $daysDiff = (int) $now->diff($eventDateTime)->days;
            if ($daysDiff > 5) {
                return ['unavailable' => true, 'reason' => 'date_too_far'];
            }
        }

        try {
            if ($eventDate === null) {
                $currentWeather = $this->fetchCurrentWeather($city);
                return $currentWeather ?? ['unavailable' => true, 'reason' => 'no_data'];
            }

            $eventDateTime = \DateTimeImmutable::createFromInterface($eventDate);
            $daysDiff = (int) $now->diff($eventDateTime)->days;

            if ($daysDiff === 0) {
                $currentWeather = $this->fetchCurrentWeather($city);
                return $currentWeather ?? ['unavailable' => true, 'reason' => 'no_data'];
            }

            $forecastWeather = $this->fetchForecastForDate($city, $eventDateTime);
            return $forecastWeather ?? ['unavailable' => true, 'reason' => 'no_data'];
        } catch (\Throwable) {
            return ['unavailable' => true, 'reason' => 'api_error'];
        }
    }

    private function fetchCurrentWeather(string $city): array|null
    {
        $response = $this->httpClient->request('GET', self::CURRENT_WEATHER_URL, [
            'query' => [
                'q' => $city,
                'appid' => $this->apiKey,
                'units' => 'metric',
                'lang' => 'fr',
            ],
        ]);

        $data = $response->toArray();

        return [
            'temp' => round($data['main']['temp'] ?? 0, 1),
            'description' => $data['weather'][0]['description'] ?? 'N/A',
            'icon' => $data['weather'][0]['icon'] ?? '01d',
            'humidity' => (int) ($data['main']['humidity'] ?? 0),
            'wind_speed' => round($data['wind']['speed'] ?? 0, 1),
        ];
    }

    private function fetchForecastForDate(string $city, \DateTimeImmutable $eventDate): array|null
    {
        $response = $this->httpClient->request('GET', self::FORECAST_URL, [
            'query' => [
                'q' => $city,
                'appid' => $this->apiKey,
                'units' => 'metric',
                'lang' => 'fr',
            ],
        ]);

        $data = $response->toArray();
        $list = $data['list'] ?? [];

        if (empty($list)) {
            return null;
        }

        $eventTs = $eventDate->getTimestamp();
        $closest = $list[0];
        $closestDiff = abs($closest['dt'] - $eventTs);

        foreach ($list as $item) {
            $diff = abs($item['dt'] - $eventTs);
            if ($diff < $closestDiff) {
                $closestDiff = $diff;
                $closest = $item;
            }
        }

        return [
            'temp' => round($closest['main']['temp'] ?? 0, 1),
            'description' => $closest['weather'][0]['description'] ?? 'N/A',
            'icon' => $closest['weather'][0]['icon'] ?? '01d',
            'humidity' => (int) ($closest['main']['humidity'] ?? 0),
            'wind_speed' => round($closest['wind']['speed'] ?? 0, 1),
        ];
    }
}
