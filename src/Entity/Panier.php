<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 19, scale: 4)]
    private ?string $pan_prix_unite = null;

    #[ORM\Column]
    private ?int $pan_quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPanPrixUnite(): ?string
    {
        return $this->pan_prix_unite;
    }

    public function setPanPrixUnite(string $pan_prix_unite): static
    {
        $this->pan_prix_unite = $pan_prix_unite;

        return $this;
    }

    public function getPanQuantite(): ?int
    {
        return $this->pan_quantite;
    }

    public function setPanQuantite(int $pan_quantite): static
    {
        $this->pan_quantite = $pan_quantite;

        return $this;
    }
}