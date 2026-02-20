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
    // Emergency level constants
    public const EMERGENCY_CRITICAL = 'critical';
    public const EMERGENCY_HIGH = 'high';
    public const EMERGENCY_MEDIUM = 'medium';
    public const EMERGENCY_LOW = 'low';

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

    #[ORM\Column(name: 'prochaine_visite', type: Types::DATETIME_MUTABLE, nullable: false)]
    #[Groups(['suivis'])]
    #[Assert\NotBlank(message: "La date de prochaine visite est requise")]
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

    // New emergency level field
    #[ORM\Column(name: 'emergency_level', length: 20, nullable: true)]
    #[Groups(['suivis'])]
    private ?string $emergencyLevel = null;

    // New AI analysis report field
    #[ORM\Column(name: 'ai_analysis_report', type: Types::TEXT, nullable: true)]
    #[Groups(['suivis'])]
    private ?string $aiAnalysisReport = null;

    // New affected body parts field
    #[ORM\Column(name: 'affected_body_parts', type: Types::JSON, nullable: true)]
    #[Groups(['suivis'])]
    private ?array $affectedBodyParts = null;

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

    public function getEmergencyLevel(): ?string
    {
        return $this->emergencyLevel;
    }

    public function setEmergencyLevel(?string $emergencyLevel): static
    {
        $this->emergencyLevel = $emergencyLevel;

        return $this;
    }

    public function getAiAnalysisReport(): ?string
    {
        return $this->aiAnalysisReport;
    }

    public function setAiAnalysisReport(?string $aiAnalysisReport): static
    {
        $this->aiAnalysisReport = $aiAnalysisReport;

        return $this;
    }

    public function getAffectedBodyParts(): ?array
    {
        return $this->affectedBodyParts;
    }

    public function setAffectedBodyParts(?array $affectedBodyParts): static
    {
        $this->affectedBodyParts = $affectedBodyParts;

        return $this;
    }

    // Méthode pour obtenir le nom du chien (utile pour l'affichage)
    public function getChienNom(): ?string
    {
        if ($this->consultation) {
            // Consultation provides getDog()/getChien() — prefer dog API
            $dog = method_exists($this->consultation, 'getDog') ? $this->consultation->getDog() : $this->consultation->getChien();
            if ($dog) {
                return method_exists($dog, 'getName') ? $dog->getName() : (method_exists($dog, 'getNom') ? $dog->getNom() : null);
            }
        }
        return null;
    }

    // Get CSS class for emergency level
    public function getEmergencyLevelClass(): string
    {
        return match($this->emergencyLevel) {
            self::EMERGENCY_CRITICAL => 'bg-red-100 text-red-800 border-red-300',
            self::EMERGENCY_HIGH => 'bg-orange-100 text-orange-800 border-orange-300',
            self::EMERGENCY_MEDIUM => 'bg-yellow-100 text-yellow-800 border-yellow-300',
            self::EMERGENCY_LOW => 'bg-green-100 text-green-800 border-green-300',
            default => 'bg-gray-100 text-gray-800 border-gray-300',
        };
    }

    // Get display name for emergency level
    public function getEmergencyLevelDisplay(): string
    {
        return match($this->emergencyLevel) {
            self::EMERGENCY_CRITICAL => '🔴 Critical',
            self::EMERGENCY_HIGH => '🟠 High',
            self::EMERGENCY_MEDIUM => '🟡 Medium',
            self::EMERGENCY_LOW => '🟢 Low',
            default => '⚪ Unknown',
        };
    }

    public function __toString(): string
    {
        return 'Suivi #' . $this->id . ' - ' . $this->type . ' (' . $this->etat . ')';
    }
}