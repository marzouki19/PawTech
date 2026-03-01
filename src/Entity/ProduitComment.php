<?php

namespace App\Entity;

use App\Repository\ProduitCommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitCommentRepository::class)]
#[ORM\Table(name: 'produit_comment')]
class ProduitComment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Produit::class)]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'Product is required')]
    private ?Produit $produit = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Name is required')]
    #[Assert\Length(min: 2, max: 255)]
    private ?string $auteur = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Comment is required')]
    #[Assert\Length(min: 5)]
    private ?string $contenu = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotNull(message: 'Rating is required')]
    #[Assert\Range(min: 1, max: 5)]
    private ?int $note = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
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

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;
        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;
        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}
