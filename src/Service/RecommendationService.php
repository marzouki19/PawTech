<?php

namespace App\Service;

use App\Entity\Produit;
use App\Entity\LigneCommande;
use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;

class RecommendationService
{
    private EntityManagerInterface $em;
    
    /** @var array<int, list<float>> */
    private array $productFeatures = [];
    
    /** @var array<int, float> */
    private array $productDistances = [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Get product recommendations based on KNN
     *
     * @return list<Produit>
     */
    public function getRecommendations(int $productId, int $k = 5): array
    {
        $this->buildProductFeatures();
        
        if (!isset($this->productFeatures[$productId])) {
            return [];
        }

        /** @var list<float> $targetFeatures */
        $targetFeatures = $this->productFeatures[$productId];
        
        /** @var array<int, float> $distances */
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
            /** @var int|false $posA */
            $posA = array_search($a->getId(), $nearestNeighbors);
            /** @var int|false $posB */
            $posB = array_search($b->getId(), $nearestNeighbors);
            
            $posA = $posA !== false ? $posA : PHP_INT_MAX;
            $posB = $posB !== false ? $posB : PHP_INT_MAX;
            
            return $posA - $posB;
        });

        return $products;
    }

    /**
     * Get collaborative filtering recommendations
     *
     * @return list<Produit>
     */
    public function getCollaborativeFilteringRecommendations(int $userId, int $k = 5): array
    {
        $userOrders = $this->em->getRepository(Commande::class)->findBy(['user' => $userId]);
        
        if (empty($userOrders)) {
            return [];
        }

        /** @var list<int> $purchasedProductIds */
        $purchasedProductIds = [];
        foreach ($userOrders as $order) {
            $lines = $this->em->getRepository(LigneCommande::class)->findBy(['commande' => $order]);
            foreach ($lines as $line) {
                $produit = $line->getProduit();
                if ($produit !== null) {
                    $id = $produit->getId();
                    if ($id !== null) {
                        $purchasedProductIds[] = $id;
                    }
                }
            }
        }

        $purchasedProductIds = array_unique($purchasedProductIds);

        $allProducts = $this->em->getRepository(Produit::class)->findAll();
        
        /** @var array{product: Produit, score: float} $recommendations */
        $recommendations = [];
        foreach ($allProducts as $product) {
            $productId = $product->getId();
            if ($productId !== null && !in_array($productId, $purchasedProductIds, true)) {
                $score = $this->calculateProductScore($product, $purchasedProductIds);
                $recommendations[] = ['product' => $product, 'score' => $score];
            }
        }

        usort($recommendations, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        $result = array_slice($recommendations, 0, $k);
        
        /** @var list<Produit> */
        return array_column($result, 'product');
    }

    /**
     * Build product features for KNN
     */
    private function buildProductFeatures(): void
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        /** @var array<int, int> $categorieIds */
        $categorieIds = [];
        foreach ($products as $product) {
            $productId = $product->getId();
            $categorie = $product->getCategorie();
            if ($productId !== null && $categorie !== null) {
                $categorieId = $categorie->getId();
                if ($categorieId !== null) {
                    $categorieIds[$productId] = $categorieId;
                }
            }
        }

        $maxPrix = 0;
        $maxQuantite = 0;
        foreach ($products as $product) {
            $prix = $product->getPrix();
            $quantite = $product->getQuantite();
            if ($prix > $maxPrix) {
                $maxPrix = $prix;
            }
            if ($quantite > $maxQuantite) {
                $maxQuantite = $quantite;
            }
        }

        $categorieCount = count(array_unique($categorieIds));

        foreach ($products as $product) {
            $productId = $product->getId();
            if ($productId === null) {
                continue;
            }
            
            $features = [
                $maxPrix > 0 ? $product->getPrix() / $maxPrix : 0,
                $maxQuantite > 0 ? $product->getQuantite() / $maxQuantite : 0,
                isset($categorieIds[$productId]) ? $categorieIds[$productId] / ($categorieCount ?: 1) : 0,
            ];

            $purchaseCount = $this->getProductPurchaseCount($productId);
            $maxPurchaseCount = $this->getMaxPurchaseCount();
            $features[] = $maxPurchaseCount > 0 ? $purchaseCount / $maxPurchaseCount : 0;

            $this->productFeatures[$productId] = $features;
        }
    }

    /**
     * Calculate Euclidean distance between two feature vectors
     *
     * @param list<float> $a
     * @param list<float> $b
     */
    private function euclideanDistance(array $a, array $b): float
    {
        $sum = 0;
        $count = min(count($a), count($b));
        for ($i = 0; $i < $count; $i++) {
            $sum += pow($a[$i] - $b[$i], 2);
        }
        return sqrt($sum);
    }

    /**
     * Get product purchase count
     */
    private function getProductPurchaseCount(int $productId): int
    {
        $lines = $this->em->getRepository(LigneCommande::class)->findBy(['produit' => $productId]);
        return count($lines);
    }

    /**
     * Get max purchase count across all products
     */
    private function getMaxPurchaseCount(): int
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        $max = 0;
        foreach ($products as $product) {
            $productId = $product->getId();
            if ($productId !== null) {
                $count = $this->getProductPurchaseCount($productId);
                if ($count > $max) {
                    $max = $count;
                }
            }
        }
        return $max;
    }

    /**
     * Calculate product score for recommendations
     *
     * @param list<int> $purchasedProductIds
     */
    private function calculateProductScore(Produit $product, array $purchasedProductIds): float
    {
        $score = 0;

        $purchasedProducts = $this->em->getRepository(Produit::class)->findBy(['id' => $purchasedProductIds]);
        
        foreach ($purchasedProducts as $purchased) {
            $productCategorie = $product->getCategorie();
            $purchasedCategorie = $purchased->getCategorie();
            if ($productCategorie !== null && $purchasedCategorie !== null) {
                $productCatId = $productCategorie->getId();
                $purchasedCatId = $purchasedCategorie->getId();
                if ($productCatId !== null && $purchasedCatId !== null && $productCatId === $purchasedCatId) {
                    $score += 10;
                }
            }

            $priceDiff = abs($product->getPrix() - $purchased->getPrix());
            if ($priceDiff < 50) {
                $score += 5;
            }
        }

        $productId = $product->getId();
        if ($productId !== null) {
            $purchaseCount = $this->getProductPurchaseCount($productId);
            $score += $purchaseCount * 2;
        }

        return $score;
    }

    /**
     * Get similar products
     *
     * @return list<Produit>
     */
    public function getSimilarProducts(Produit $product, int $limit = 4): array
    {
        $productId = $product->getId();
        if ($productId === null) {
            return [];
        }
        return $this->getRecommendations($productId, $limit);
    }

    /**
     * Update product rating when purchased
     * Each purchase adds a rating (default 5 stars) and increments purchase count
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
        $product->incrementPurchaseCount();
        $this->em->flush();
    }

    /**
     * Update ratings for multiple products (order lines)
     *
     * @param iterable<mixed> $orderLines
     */
    public function updateRatingsForOrder(iterable $orderLines): void
    {
        foreach ($orderLines as $line) {
            if ($line instanceof LigneCommande) {
                $produit = $line->getProduit();
                if ($produit !== null) {
                    $productId = $produit->getId();
                    if ($productId !== null) {
                        $this->updateProductRatingOnPurchase($productId);
                    }
                }
            }
        }
    }

    /**
     * Get products sorted by rating (for recommendation zone)
     *
     * @return list<Produit>
     */
    public function getTopRatedProducts(int $limit = 10): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        usort($products, function($a, $b) {
            return $b->getAverageRating() <=> $a->getAverageRating();
        });
        
        return array_slice($products, 0, $limit);
    }

    /**
     * Get recommended products based on purchases (same category + popular)
     *
     * @return list<Produit>
     */
    public function getPurchaseBasedRecommendations(int $limit = 6): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        /** @var array{product: Produit, score: float} $recommendations */
        $recommendations = [];
        foreach ($products as $product) {
            $score = 0;
            
            // Higher rating = higher score
            $score += $product->getAverageRating() * 10;
            
            // Purchase count also matters
            $productId = $product->getId();
            if ($productId !== null) {
                $purchaseCount = $this->getProductPurchaseCount($productId);
                $score += $purchaseCount * 3;
            }
            
            // Availability bonus
            if ($product->getQuantite() > 0) {
                $score += 2;
            }
            
            $recommendations[] = ['product' => $product, 'score' => $score];
        }
        
        usort($recommendations, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });
        
        $result = array_slice($recommendations, 0, $limit);
        
        /** @var list<Produit> */
        return array_column($result, 'product');
    }

    /**
     * Get products recommended using KNN algorithm
     * Uses product features (price, quantity, category, purchase count) to find similar products
     *
     * @return list<Produit>
     */
    public function getAllProductsWithKnnScore(int $limit = 6): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        if (empty($products)) {
            return [];
        }

        // Build features for all products
        $this->buildProductFeatures();
        
        // Calculate KNN scores based on distance to centroid of popular products
        $popularProductIds = $this->getPopularProductIds(5);
        
        if (empty($popularProductIds)) {
            // If no purchases yet, just return top rated
            return $this->getTopRatedProducts($limit);
        }

        // Calculate centroid of popular products
        $centroid = $this->calculateCentroid($popularProductIds);
        
        // Score all products by their distance to the centroid (closer = better)
        /** @var array{product: Produit, score: float} $recommendations */
        $recommendations = [];
        foreach ($products as $product) {
            $productId = $product->getId();
            if ($productId !== null && isset($this->productFeatures[$productId])) {
                $distance = $this->euclideanDistance($this->productFeatures[$productId], $centroid);
                $score = 100 - $distance; // Invert distance (closer = higher score)
                
                // Boost score for available products
                if ($product->getQuantite() > 0) {
                    $score += 10;
                }
                
                // Boost for higher rating
                $score += $product->getAverageRating() * 5;
                
                $recommendations[] = ['product' => $product, 'score' => $score];
            }
        }
        
        usort($recommendations, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });
        
        $result = array_slice($recommendations, 0, $limit);
        
        /** @var list<Produit> */
        return array_column($result, 'product');
    }

    /**
     * Get IDs of most purchased products
     *
     * @return list<int>
     */
    private function getPopularProductIds(int $limit = 5): array
    {
        $products = $this->em->getRepository(Produit::class)->findAll();
        
        /** @var array<int, int> $purchaseCounts */
        $purchaseCounts = [];
        foreach ($products as $product) {
            $productId = $product->getId();
            if ($productId !== null) {
                $purchaseCounts[$productId] = $this->getProductPurchaseCount($productId);
            }
        }
        
        arsort($purchaseCounts);
        
        return array_slice(array_keys($purchaseCounts), 0, $limit);
    }

    /**
     * Calculate centroid (average features) of a set of products
     *
     * @param list<int> $productIds
     * @return list<float>
     */
    private function calculateCentroid(array $productIds): array
    {
        /** @var list<float> $features */
        $features = [];
        $count = 0;
        
        foreach ($productIds as $id) {
            if (isset($this->productFeatures[$id])) {
                $count++;
                $productFeatures = $this->productFeatures[$id];
                $featuresCount = count($features);
                $productFeaturesCount = count($productFeatures);
                
                for ($i = 0; $i < $productFeaturesCount; $i++) {
                    if (!isset($features[$i])) {
                        $features[$i] = 0;
                    }
                    $features[$i] = ($features[$i] * $featuresCount + $productFeatures[$i]) / ($featuresCount + 1);
                }
                
                // Initialize any new features
                for ($i = $featuresCount; $i < $productFeaturesCount; $i++) {
                    $features[$i] = $productFeatures[$i];
                }
            }
        }
        
        return $features;
    }
}
