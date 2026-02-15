<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    public const STATUTS = ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE'];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'La date de participation est obligatoire')]
    private ?\DateTime $dateParticipation = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire')]
    #[Assert\Choice(choices: self::STATUTS, message: 'Statut invalide')]
    private ?string $statut = 'EN_ATTENTE';

    #[ORM\ManyToOne(inversedBy: 'participations')]
    #[Assert\NotNull(message: 'L\'utilisateur est obligatoire')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'participations')]
    #[Assert\NotNull(message: 'L\'événement est obligatoire')]
    private ?Evenement $evenement = null;

    public function __construct()
    {
        $this->statut = 'EN_ATTENTE';
        $this->dateParticipation = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateParticipation(): ?\DateTime
    {
        return $this->dateParticipation;
    }

    public function setDateParticipation(\DateTime $dateParticipation): static
    {
        $this->dateParticipation = $dateParticipation;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): static
    {
        $this->evenement = $evenement;
        return $this;
    }

    public function confirm(): void
    {
        $this->statut = 'CONFIRMEE';
    }

    public function cancel(): void
    {
        $this->statut = 'ANNULEE';
    }
}
