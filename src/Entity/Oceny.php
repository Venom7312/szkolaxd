<?php

namespace App\Entity;

use App\Repository\OcenyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OcenyRepository::class)
 */
class Oceny
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUcznia;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $idPrzedmiotu;

    /**
     * @ORM\Column(type="integer")
     */
    private $Ocena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUcznia(): ?int
    {
        return $this->idUcznia;
    }

    public function setIdUcznia(int $idUcznia): self
    {
        $this->idUcznia = $idUcznia;

        return $this;
    }

    public function getIdPrzedmiotu(): ?string
    {
        return $this->idPrzedmiotu;
    }

    public function setIdPrzedmiotu(string $idPrzedmiotu): self
    {
        $this->idPrzedmiotu = $idPrzedmiotu;

        return $this;
    }

    public function getOcena(): ?int
    {
        return $this->Ocena;
    }

    public function setOcena(int $Ocena): self
    {
        $this->Ocena = $Ocena;

        return $this;
    }
}
