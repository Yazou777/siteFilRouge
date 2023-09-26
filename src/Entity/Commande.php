<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $com_date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $com_commentaire = null;

    public function __construct()
    {
        $this->com_date = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComDate(): ?\DateTimeImmutable
    {
        return $this->com_date;
    }

    // public function setComDate(\DateTimeImmutable $com_date): static
    // {
    //     $this->com_date = $com_date;

    //     return $this;
    // }
    
    #[ORM\PrePersist]
    public function setComDate(): static
    {
        $this->com_date =  new \DateTimeImmutable();

        return $this;
    }

    public function getComCommentaire(): ?string
    {
        return $this->com_commentaire;
    }

    public function setComCommentaire(?string $com_commentaire): static
    {
        $this->com_commentaire = $com_commentaire;

        return $this;
    }

}
