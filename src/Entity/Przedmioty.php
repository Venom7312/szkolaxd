<?php

namespace App\Entity;

use App\Repository\PrzedmiotyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrzedmiotyRepository::class)
 */
class Przedmioty
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nazwaPrzedmiotu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwaPrzedmiotu(): ?string
    {
        return $this->nazwaPrzedmiotu;
    }

    public function setNazwaPrzedmiotu(string $nazwaPrzedmiotu): self
    {
        $this->nazwaPrzedmiotu = $nazwaPrzedmiotu;

        return $this;
    }
}
