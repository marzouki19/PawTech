<?php

namespace App\Entity;

use App\Repository\ObservationStationRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[UniqueEntity(fields: ['code'], message: 'Ce code existe déjà.')]
#[ORM\Entity(repositoryClass: ObservationStationRepository::class)]
#[ORM\Table(name: 'observation_station')]
#[ORM\UniqueConstraint(name: 'uniq_observation_station_code', columns: ['code'])]
class ObservationStation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['stations'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide')]
    #[Assert\Length(max: 255)]
    #[Assert\Regex(
        pattern: '/^\d{6}$/',
        message: 'Le code doit contenir exactement 6 chiffres.'
    )]
    #[Groups(['stations'])]
    private ?string $code = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide')]
    #[Assert\Length(max: 50)]
    #[Assert\Regex(
        pattern: '/^[A-Za-z]+_[A-Za-z]+$/',
        message: 'La zone doit être de la forme "ghazela_Nord".'
    )]
    #[Groups(['stations'])]
    private ?string $zone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide')]
    #[Assert\Length(max: 255)]
    #[Assert\Regex(
        pattern: '/^-?\d{1,3}\.\d+,\s*-?\d{1,3}\.\d+$/',
        message: 'La localisation doit être au format "48.8566, 2.3522".'
    )]
    #[Groups(['stations'])]
    private ?string $localisation = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide')]
    #[Assert\Length(max: 50)]
    #[Assert\Choice(
        choices: ['active', 'inactive', 'maintenance'],
        message: 'Le statut doit être "active", "inactive" ou "maintenance".'
    )]
    #[Groups(['stations'])]
    private ?string $statut = null;

    /**
     * @var Collection<int, Alert>
     */
    #[ORM\OneToMany(targetEntity: Alert::class, mappedBy: 'station', orphanRemoval: true)]
    private Collection $alerts;

    public function __construct()
    {
        $this->alerts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): static
    {
        $this->zone = $zone;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, Alert>
     */
    public function getAlerts(): Collection
    {
        return $this->alerts;
    }

    public function addAlert(Alert $alert): static
    {
        if (!$this->alerts->contains($alert)) {
            $this->alerts->add($alert);
            $alert->setStation($this);
        }

        return $this;
    }

    public function removeAlert(Alert $alert): static
    {
        if ($this->alerts->removeElement($alert)) {
            // set the owning side to null (unless already changed)
            if ($alert->getStation() === $this) {
                $alert->setStation(null);
            }
        }

        return $this;
    }
}
