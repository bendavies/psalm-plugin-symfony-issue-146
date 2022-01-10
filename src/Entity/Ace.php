<?php

namespace App\Entity;

use App\Repository\AceRepository;
use Doctrine\ORM\Mapping as ORM;

/** @psalm-suppress MissingConstructor */
#[ORM\Entity(repositoryClass: AceRepository::class)]
class Ace
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
