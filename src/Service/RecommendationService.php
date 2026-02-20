<?php

namespace App\Service;

use App\Entity\Produit;
use App\Entity\LigneCommande;
use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;

class RecommendationService
{
    private EntityManagerInterface $em;
    private array $productFeatures = [];
    private array $productDistances = [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function getRecommendations(int $productId, int $k = 5): array
    {
        $this->buildProductFeatures();
        
        if (!isset($this->productFeatures[$productId])) {
            return [];
        }

        $targetFeatures = $this->productFeatures[$productId];
        $distances = [];

        foreach ($this->productFeatures as $id => $features) {
            if ($id !== $productId) {
                $distances[$id] = $this->euclideanDistance($targetFeatures, $features);
            }
        }

        asort($distances);
        
        $nearestNeighbors = array_slice(array_keys($distances), 0, $k, true);
        
        $products = $this->em->getRepository(Produit::class)->findBy(['id' => $nearestNeighbors]);
        
        usort($products, function($a, $b) use ($nearestNeighbors) {
            $posA = array_search($a->getId(), $nearestNeighbors);
            $posB = array_search($b->getId(), $nearestNeighbors);
            return $posA - $posB;
        });

        return $products;
    }

    public function getCollaborativeFilteringRecommendations(int $userId, int $k = 5): array
    {
        $userOrders = $this->em->getRepository(Commande::class)->findBy(['user' => $userId]);
        
        if (empty($userOrders)) {
            return [];
        }

        $purchasedProductIds = [];
        foreach ($userOrders as $order) {
            $lines = $this->em->getRepository(LigneCommande::class)->findBy(['commande' => $order]);
            foreach ($lines as $line) {
                $purchasedProductIds[] = $line->getProduit()->getId();
            }
        }

        $purchasedProductIds = array_unique($purchasedProductIds);

        $allProducts = $this->em->getRepository(Produit::class)->findAll();
        
        $recommendations = [];
        foreach ($allProducts as $product) {
            if (!in_array($product->getId(), $purchasedProductIds)) {
                $score = $this->calculateProductScore($product, $purchasedProductIds);
                $recommendations[] = ['product' => $product, 'score' => $score];
            }
        }

        usort($recommendations, function($a, $b) {
            return $b['score'] - $a['score'];
        });

        return array_slice(array_column($recommendations, 'product'), 0, $k);
    }

    private function buildProductFeatures(): void
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        $categorieIds = [];
        foreach ($products as $product) {
            if ($product->getCategorie()) {
                $categorieIds[$product->getId()] = $product->getCategorie()->getId();
            }
        }

        $maxPrix = 0;
        $maxQuantite = 0;
        foreach ($products as $product) {
            if ($product->getPrix() > $maxPrix) {
                $maxPrix = $product->getPrix();
            }
            if ($product->getQuantite() > $maxQuantite) {
                $maxQuantite = $product->getQuantite();
            }
        }

        $categorieCount = count(array_unique($categorieIds));

        foreach ($products as $product) {
            $features = [
                $maxPrix > 0 ? $product->getPrix() / $maxPrix : 0,
                $maxQuantite > 0 ? $product->getQuantite() / $maxQuantite : 0,
                isset($categorieIds[$product->getId()]) ? $categorieIds[$product->getId()] / ($categorieCount ?: 1) : 0,
            ];

            $purchaseCount = $this->getProductPurchaseCount($product->getId());
            $maxPurchaseCount = $this->getMaxPurchaseCount();
            $features[] = $maxPurchaseCount > 0 ? $purchaseCount / $maxPurchaseCount : 0;

            $this->productFeatures[$product->getId()] = $features;
        }
    }

    private function euclideanDistance(array $a, array $b): float
    {
        $sum = 0;
        for ($i = 0; $i < count($a); $i++) {
            $sum += pow($a[$i] - $b[$i], 2);
        }
        return sqrt($sum);
    }

    private function getProductPurchaseCount(int $productId): int
    {
        $lines = $this->em->getRepository(LigneCommande::class)->findBy(['produit' => $productId]);
        return count($lines);
    }

    private function getMaxPurchaseCount(): int
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        $max = 0;
        foreach ($products as $product) {
            $count = $this->getProductPurchaseCount($product->getId());
            if ($count > $max) {
                $max = $count;
            }
        }
        return $max;
    }

    private function calculateProductScore(Produit $product, array $purchasedProductIds): float
    {
        $score = 0;

        $purchasedProducts = $this->em->getRepository(Produit::class)->findBy(['id' => $purchasedProductIds]);
        
        foreach ($purchasedProducts as $purchased) {
            if ($product->getCategorie() && $purchased->getCategorie()) {
                if ($product->getCategorie()->getId() === $purchased->getCategorie()->getId()) {
                    $score += 10;
                }
            }

            $priceDiff = abs($product->getPrix() - $purchased->getPrix());
            if ($priceDiff < 50) {
                $score += 5;
            }
        }

        $purchaseCount = $this->getProductPurchaseCount($product->getId());
        $score += $purchaseCount * 2;

        return $score;
    }

    public function getSimilarProducts(Produit $product, int $limit = 4): array
    {
        return $this->getRecommendations($product->getId(), $limit);
    }

    /**
     * Update product rating when purchased
     * Each purchase adds a rating (default 5 stars)
     */
    public function updateProductRatingOnPurchase(int $productId, float $rating = 5.0): void
    {
        $product = $this->em->getRepository(Produit::class)->find($productId);
        
        if (!$product) {
            return;
        }

        // Clamp rating between 1 and 5
        $rating = max(1.0, min(5.0, $rating));
        
        $product->addRating($rating);
        $this->em->flush();
    }

    /**
     * Update ratings for multiple products (order lines)
     */
    public function updateRatingsForOrder(array $orderLines): void
    {
        foreach ($orderLines as $line) {
            if ($line instanceof LigneCommande) {
                $this->updateProductRatingOnPurchase($line->getProduit()->getId());
            }
        }
    }

    /**
     * Get products sorted by rating (for recommendation zone)
     */
    public function getTopRatedProducts(int $limit = 10): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        usort($products, function($a, $b) {
            return $b->getAverageRating() - $a->getAverageRating();
        });
        
        return array_slice($products, 0, $limit);
    }

    /**
     * Get recommended products based on purchases (same category + popular)
     */
    public function getPurchaseBasedRecommendations(int $limit = 6): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        $recommendations = [];
        foreach ($products as $product) {
            $score = 0;
            
            // Higher rating = higher score
            $score += $product->getAverageRating() * 10;
            
            // Purchase count also matters
            $purchaseCount = $this->getProductPurchaseCount($product->getId());
            $score += $purchaseCount * 3;
            
            // Availability bonus
            if ($product->getQuantite() > 0) {
                $score += 2;
            }
            
            $recommendations[] = ['product' => $product, 'score' => $score];
        }
        
        usort($recommendations, function($a, $b) {
            return $b['score'] - $a['score'];
        });
        
        return array_slice(array_column($recommendations, 'product'), 0, $limit);
    }
}
