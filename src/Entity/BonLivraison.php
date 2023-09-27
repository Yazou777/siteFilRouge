<?php

namespace App\Entity;

use App\Repository\BonLivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: BonLivraisonRepository::class)]
class BonLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $bon_date_envoie = null;

    #[ORM\ManyToOne(inversedBy: 'bonLivraisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $bon_com = null;

    public function __construct()
    {
        $this->bon_date_envoie = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBonDateEnvoie(): ?\DateTimeImmutable
    {
        return $this->bon_date_envoie;
    }

    #[ORM\PrePersist]
    public function setBonDateEnvoie(): static
    {
        $this->bon_date_envoie =  new \DateTimeImmutable();

        return $this;
    }

    public function getBonCom(): ?Commande
    {
        return $this->bon_com;
    }

    public function setBonCom(?Commande $bon_com): static
    {
        $this->bon_com = $bon_com;

        return $this;
    }
}
