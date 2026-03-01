<?php

namespace App\Entity;

use App\Repository\DemandForecastRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandForecastRepository::class)]
#[ORM\Table(name: 'demand_forecast')]
class DemandForecast
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Produit::class)]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'id', nullable: false)]
    private ?Produit $produit = null;

    #[ORM\Column(type: 'integer')]
    private ?int $predictedDemand = null;

    #[ORM\Column(type: 'integer')]
    private ?int $confidence = null;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $timeframe = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $generatedAt = null;

    #[ORM\Column(type: 'string', length: 20)]
    private ?string $trend = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $historicalSales = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $growthRate = null;

    public function __construct()
    {
        $this->generatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): static
    {
        $this->produit = $produit;
        return $this;
    }

    public function getPredictedDemand(): ?int
    {
        return $this->predictedDemand;
    }

    public function setPredictedDemand(int $predictedDemand): static
    {
        $this->predictedDemand = $predictedDemand;
        return $this;
    }

    public function getConfidence(): ?int
    {
        return $this->confidence;
    }

    public function setConfidence(int $confidence): static
    {
        $this->confidence = $confidence;
        return $this;
    }

    public function getTimeframe(): ?string
    {
        return $this->timeframe;
    }

    public function setTimeframe(string $timeframe): static
    {
        $this->timeframe = $timeframe;
        return $this;
    }

    public function getGeneratedAt(): ?\DateTimeInterface
    {
        return $this->generatedAt;
    }

    public function setGeneratedAt(\DateTimeInterface $generatedAt): static
    {
        $this->generatedAt = $generatedAt;
        return $this;
    }

    public function getTrend(): ?string
    {
        return $this->trend;
    }

    public function setTrend(string $trend): static
    {
        $this->trend = $trend;
        return $this;
    }

    public function getHistoricalSales(): ?int
    {
        return $this->historicalSales;
    }

    public function setHistoricalSales(?int $historicalSales): static
    {
        $this->historicalSales = $historicalSales;
        return $this;
    }

    public function getGrowthRate(): ?float
    {
        return $this->growthRate;
    }

    public function setGrowthRate(?float $growthRate): static
    {
        $this->growthRate = $growthRate;
        return $this;
    }
}
