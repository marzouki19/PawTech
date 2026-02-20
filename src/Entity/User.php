<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(targetEntity: \App\Entity\Consultation::class, mappedBy: 'user')]
    private Collection $consultations;


    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "The Last name cannot be empty.")]
    #[Assert\Length(
        min: 2,
        max: 30,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message: "Le nom ne peut contenir que des lettres, espaces, apostrophes ou tirets."
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "The first name cannot be empty.")]
    #[Assert\Length(
        min: 3,
        max: 100,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le prénom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message: "Le prénom ne peut contenir que des lettres, espaces, apostrophes ou tirets."
    )]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "The email cannot be empty.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $email = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "The phone number cannot be empty.")]
    #[Assert\Regex(
        pattern: "/^\d+$/",
        message: "Le numéro de téléphone doit contenir uniquement des chiffres."
    )]
    #[Assert\Length(
        exactMessage: "Le numéro de téléphone doit contenir exactement {{ limit }} caractères.",
        exactly :8
    )]
    private ?int $telephone = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "The role cannot be empty.")]
    private ?string $role = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: "The status cannot be empty.")]
    #[Assert\Choice(
        choices: ['Actif', 'Inactif','actif', 'inactif'],
        message: "Le statut sélectionné n'est pas valide."
    )]
    private ?string $status = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "The password cannot be empty.")]
    #[Assert\Length(
        min: 8,
        max: 255,
        minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le mot de passe ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^(?=.*[a-zA-Z])(?=.*\d).+$/",
        message: "Le mot de passe doit contenir au moins une lettre et un chiffre."
    )]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $user_image = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotBlank(message: "The order number cannot be empty.")]
    private ?int $order_number = null;

    #[ORM\Column(length: 10, nullable: true)]
    #[Assert\NotBlank(message: "The matricule cannot be empty.")]
    private ?string $matricule = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: "The affected zone cannot be empty.")]
    private ?string $zone_affectee = null;


    public function __construct()
    {
        $this->consultations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $role = $this->role ?? 'ROLE_USER';
        $normalized = strtoupper(str_replace(' ', '_', $role));

        return [str_starts_with($normalized, 'ROLE_') ? $normalized : 'ROLE_'.$normalized];
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }

    public function getUserImage(): ?string
    {
        return $this->user_image;
    }

    public function setUserImage(string $user_image): static
    {
        $this->user_image = $user_image;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->order_number;
    }

    public function setOrderNumber(?int $order_number): static
    {
        $this->order_number = $order_number;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getZoneAffectee(): ?string
    {
        return $this->zone_affectee;
    }

    public function setZoneAffectee(?string $zone_affectee): static
    {
        $this->zone_affectee = $zone_affectee;

        return $this;
    }




 public function getFullName(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }

    /**
     * @return Collection<int, \App\Entity\Consultation>
     */
    public function getConsultations(): Collection
    {
        return $this->consultations;
    }

    // Alias methods for compatibility with event registration
    public function getPhone(): ?string
    {
        return $this->telephone ? (string) $this->telephone : null;
    }

    public function setPhone(?string $phone): static
    {
        $this->telephone = $phone ? (int) preg_replace('/[^0-9]/', '', $phone) : null;
        return $this;
    }


}
