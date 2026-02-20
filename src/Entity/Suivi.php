<?php

namespace App\Entity;

use App\Repository\SuiviRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SuiviRepository::class)]
#[ORM\Table(name: 'suivi')]
class Suivi
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['suivis'])]
    private ?int $id = null;

    #[ORM\Column(name: 'etat', length: 50)]
    #[Groups(['suivis'])]
    #[Assert\NotBlank(message: "L'état est requis")]
    #[Assert\Length(
        min: 3,
        max: 50,
        minMessage: "L'état doit contenir au moins {{ limit }} caractères",
        maxMessage: "L'état ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $etat = null;

    #[ORM\Column(name: 'recommandation', type: Types::TEXT)]
    #[Groups(['suivis'])]
    #[Assert\NotBlank(message: "La recommandation est requise")]
    #[Assert\Length(
        min: 10,
        minMessage: "La recommandation doit contenir au moins {{ limit }} caractères"
    )]
    private ?string $recommandation = null;

    #[ORM\Column(name: 'type', length: 255)]
    #[Groups(['suivis'])]
    #[Assert\NotBlank(message: "Le type de suivi est requis")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le type doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le type ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $type = null;

    #[ORM\Column(name: 'prochaine_visite', type: Types::DATETIME_MUTABLE, nullable: false)] // CHANGÉ: nullable: true → nullable: false
    #[Groups(['suivis'])]
    #[Assert\NotBlank(message: "La date de prochaine visite est requise")] // AJOUTÉ
    #[Assert\Type("\DateTimeInterface", message: "La date de prochaine visite doit être une date valide")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date de prochaine visite doit être aujourd'hui ou dans le futur"
    )]
    private ?\DateTimeInterface $prochaineVisite = null;

    #[ORM\ManyToOne(targetEntity: Consultation::class)]
    #[ORM\JoinColumn(name: 'consultation_id', nullable: false)]
    #[Groups(['suivis'])]
    #[Assert\NotNull(message: "La consultation associée est requise")]
    private ?Consultation $consultation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRecommandation(): ?string
    {
        return $this->recommandation;
    }

    public function setRecommandation(?string $recommandation): static
    {
        $this->recommandation = $recommandation;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProchaineVisite(): ?\DateTimeInterface
    {
        return $this->prochaineVisite;
    }

    public function setProchaineVisite(?\DateTimeInterface $prochaineVisite): static
    {
        $this->prochaineVisite = $prochaineVisite;

        return $this;
    }

    public function getConsultation(): ?Consultation
    {
        return $this->consultation;
    }

    public function setConsultation(?Consultation $consultation): static
    {
        $this->consultation = $consultation;

        return $this;
    }

    // Méthode pour obtenir le nom du chien (utile pour l'affichage)
    public function getChienNom(): ?string
    {
        if ($this->consultation) {
            // Consultation provides getDog()/getChien() — prefer dog API
            $dog = method_exists($this->consultation, 'getDog') ? $this->consultation->getDog() : $this->consultation->getDog();
            if ($dog) {
                return method_exists($dog, 'getName') ? $dog->getName() : (method_exists($dog, 'getNom') ? $dog->getName() : null);
            }
        }
        return null;
    }

    public function __toString(): string
    {
        return 'Suivi #' . $this->id . ' - ' . $this->type . ' (' . $this->etat . ')';
    }
}