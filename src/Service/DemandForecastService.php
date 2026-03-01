<?php

namespace App\Service;

use App\Entity\DemandForecast;
use App\Entity\Produit;
use App\Entity\LigneCommande;
use App\Repository\DemandForecastRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;

class DemandForecastService
{
    private EntityManagerInterface $em;
    private DemandForecastRepository $forecastRepo;
    private ProduitRepository $produitRepo;

    public function __construct(
        EntityManagerInterface $em,
        DemandForecastRepository $forecastRepo,
        ProduitRepository $produitRepo
    ) {
        $this->em = $em;
        $this->forecastRepo = $forecastRepo;
        $this->produitRepo = $produitRepo;
    }

    /**
     * Generate demand forecasts for all products
     */
    public function generateForecasts(string $timeframe = '30days'): array
    {
        $products = $this->produitRepo->findAll();
        $results = [];

        foreach ($products as $product) {
            $forecast = $this->generateForecastForProduct($product, $timeframe);
            $results[] = $forecast;
        }

        return $results;
    }

    /**
     * Generate forecast for a single product
     */
    public function generateForecastForProduct(Produit $product, string $timeframe = '30days'): DemandForecast
    {
        // Get historical sales data
        $historicalSales = $this->getHistoricalSales($product);
        $trend = $this->calculateTrend($product);
        $confidence = $this->calculateConfidence($historicalSales);
        
        // Calculate predicted demand based on various factors
        $predictedDemand = $this->calculatePredictedDemand($product, $historicalSales, $trend, $timeframe);
        
        // Calculate growth rate
        $growthRate = $this->calculateGrowthRate($product);

        // Determine trend direction
        $trendDirection = $this->determineTrendDirection($growthRate);

        // Create or update forecast
        $forecast = new DemandForecast();
        $forecast->setProduit($product);
        $forecast->setPredictedDemand($predictedDemand);
        $forecast->setConfidence($confidence);
        $forecast->setTimeframe($timeframe);
        $forecast->setGeneratedAt(new \DateTime());
        $forecast->setTrend($trendDirection);
        $forecast->setHistoricalSales($historicalSales);
        $forecast->setGrowthRate($growthRate);

        $this->em->persist($forecast);
        $this->em->flush();

        return $forecast;
    }

    /**
     * Get historical sales count for a product
     */
    private function getHistoricalSales(Produit $product): int
    {
        // Get all order lines for this product
        $lines = $this->em->getRepository(LigneCommande::class)->findBy(['produit' => $product]);
        
        $total = 0;
        foreach ($lines as $line) {
            $total += $line->getQuantite();
        }
        
        return $total;
    }

    /**
     * Calculate trend based on recent purchases
     */
    private function calculateTrend(Produit $product): string
    {
        // Get orders from last 30 days
        $recentDate = new \DateTime('-30 days');
        
        $lines = $this->em->getRepository(LigneCommande::class)->findBy(['produit' => $product]);
        
        $recentSales = 0;
        $olderSales = 0;
        
        foreach ($lines as $line) {
            $orderDate = $line->getCommande()->getDate();
            if ($orderDate >= $recentDate) {
                $recentSales += $line->getQuantite();
            } else {
                $olderSales += $line->getQuantite();
            }
        }
        
        // If recent sales are higher, trend is rising
        if ($recentSales > $olderSales * 1.2) {
            return 'rising';
        } elseif ($recentSales < $olderSales * 0.8) {
            return 'falling';
        }
        
        return 'stable';
    }

    /**
     * Calculate confidence level based on data amount
     */
    private function calculateConfidence(int $historicalSales): int
    {
        // More sales data = higher confidence
        if ($historicalSales >= 50) {
            return 90;
        } elseif ($historicalSales >= 20) {
            return 75;
        } elseif ($historicalSales >= 10) {
            return 60;
        } elseif ($historicalSales >= 5) {
            return 45;
        } elseif ($historicalSales >= 1) {
            return 30;
        }
        
        return 20; // Low confidence for new products
    }

    /**
     * Calculate predicted demand based on multiple factors
     */
    private function calculatePredictedDemand(Produit $product, int $historicalSales, string $trend, string $timeframe): int
    {
        // Base prediction from historical average
        $basePrediction = $historicalSales;
        
        // Adjust for timeframe
        $multiplier = match($timeframe) {
            '7days' => 0.23,
            '30days' => 1,
            '90days' => 3,
            '180days' => 6,
            '365days' => 12,
            default => 1
        };
        
        $prediction = $basePrediction * $multiplier;
        
        // Adjust for trend
        $trendMultiplier = match($trend) {
            'rising' => 1.3,
            'falling' => 0.7,
            default => 1.0
        };
        
        $prediction *= $trendMultiplier;
        
        // Boost for products with high purchase count (popularity factor)
        $purchaseCount = $product->getPurchaseCount() ?? 0;
        if ($purchaseCount > 50) {
            $prediction *= 1.5;
        } elseif ($purchaseCount > 20) {
            $prediction *= 1.2;
        }
        
        // Boost for products with good ratings
        $ratingCount = $product->getRatingCount() ?? 0;
        if ($ratingCount > 10) {
            $prediction *= 1.1;
        }
        
        // Ensure minimum prediction of 1
        return max(1, round($prediction));
    }

    /**
     * Calculate growth rate
     */
    private function calculateGrowthRate(Produit $product): float
    {
        // Compare last 30 days vs previous 30 days
        $recentDate = new \DateTime('-30 days');
        $olderDate = new \DateTime('-60 days');
        
        $lines = $this->em->getRepository(LigneCommande::class)->findBy(['produit' => $product]);
        
        $recentSales = 0;
        $olderSales = 0;
        
        foreach ($lines as $line) {
            $orderDate = $line->getCommande()->getDate();
            if ($orderDate >= $recentDate) {
                $recentSales += $line->getQuantite();
            } elseif ($orderDate >= $olderDate) {
                $olderSales += $line->getQuantite();
            }
        }
        
        if ($olderSales == 0) {
            return $recentSales > 0 ? 100.0 : 0.0;
        }
        
        return (($recentSales - $olderSales) / $olderSales) * 100;
    }

    /**
     * Determine trend direction string
     */
    private function determineTrendDirection(float $growthRate): string
    {
        if ($growthRate > 20) {
            return 'rising';
        } elseif ($growthRate < -20) {
            return 'falling';
        }
        return 'stable';
    }

    /**
     * Get demand summary for dashboard
     */
    public function getDemandSummary(): array
    {
        $highDemand = $this->forecastRepo->findHighDemandProducts(10);
        $risingTrend = $this->forecastRepo->findRisingTrendProducts();
        
        $totalPredictedDemand = 0;
        $avgConfidence = 0;
        
        foreach ($highDemand as $forecast) {
            $totalPredictedDemand += $forecast->getPredictedDemand();
            $avgConfidence += $forecast->getConfidence();
        }
        
        $count = count($highDemand);
        $avgConfidence = $count > 0 ? $avgConfidence / $count : 0;
        
        return [
            'highDemandProducts' => $highDemand,
            'risingTrendProducts' => $risingTrend,
            'totalPredictedDemand' => $totalPredictedDemand,
            'averageConfidence' => round($avgConfidence),
            'productsAnalyzed' => $count
        ];
    }
}
