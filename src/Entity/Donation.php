<?php

namespace App\Entity;

use App\Repository\DonationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DonationRepository::class)]
class Donation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'Amount is required.')]
    #[Assert\Type(type: 'numeric', message: 'Amount must be a number.')]
    #[Assert\Positive(message: 'Amount must be greater than 0.')]
    #[Assert\LessThanOrEqual(value: 100000, message: 'Amount cannot exceed 100000 TND.')]
    private ?string $montant = null;

    #[ORM\Column(type: 'date_immutable')]
    #[Assert\NotBlank(message: 'Date is required.')]
    #[Assert\LessThanOrEqual('today', message: 'Date cannot be in the future.')]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'Donor name is required.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Donor name must be at least {{ limit }} characters.',
        maxMessage: 'Donor name must be at most {{ limit }} characters.'
    )]
    #[Assert\Regex(
        pattern: '/^[\p{L}\s\-\']+$/u',
        message: 'Donor name can only contain letters, spaces, apostrophes and hyphens.'
    )]
    private ?string $donateur = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'Email is required.')]
    #[Assert\Email(message: 'Email "{{ value }}" is not valid.')]
    #[Assert\Length(max: 255, maxMessage: 'Email must be at most {{ limit }} characters.')]
    private ?string $email = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Reference must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9\-_.\s]*$/',
        message: 'Reference can only contain letters, numbers, spaces, hyphens, underscores and dots.'
    )]
    private ?string $reference = null;

    #[ORM\Column]
    private ?bool $statut = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDonateur(): ?string
    {
        return $this->donateur;
    }

    public function setDonateur(?string $donateur): static
    {
        $this->donateur = $donateur;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
