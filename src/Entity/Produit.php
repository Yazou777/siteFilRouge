<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $pro_nom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 19, scale: 4, nullable: true)]
    private ?string $pro_prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pro_image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pro_description = null;

    #[ORM\Column(nullable: true)]
    private ?int $pro_stkphy = null;

    #[ORM\Column(nullable: true)]
    private ?int $pro_stkale = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?categorie $cat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProNom(): ?string
    {
        return $this->pro_nom;
    }

    public function setProNom(string $pro_nom): static
    {
        $this->pro_nom = $pro_nom;

        return $this;
    }

    public function getProPrix(): ?string
    {
        return $this->pro_prix;
    }

    public function setProPrix(?string $pro_prix): static
    {
        $this->pro_prix = $pro_prix;

        return $this;
    }

    public function getProImage(): ?string
    {
        return $this->pro_image;
    }

    public function setProImage(?string $pro_image): static
    {
        $this->pro_image = $pro_image;

        return $this;
    }

    public function getProDescription(): ?string
    {
        return $this->pro_description;
    }

    public function setProDescription(?string $pro_description): static
    {
        $this->pro_description = $pro_description;

        return $this;
    }

    public function getProStkphy(): ?int
    {
        return $this->pro_stkphy;
    }

    public function setProStkphy(?int $pro_stkphy): static
    {
        $this->pro_stkphy = $pro_stkphy;

        return $this;
    }

    public function getProStkale(): ?int
    {
        return $this->pro_stkale;
    }

    public function setProStkale(?int $pro_stkale): static
    {
        $this->pro_stkale = $pro_stkale;

        return $this;
    }

    public function getCat(): ?categorie
    {
        return $this->cat;
    }

    public function setCat(?categorie $cat): static
    {
        $this->cat = $cat;

        return $this;
    }
}
