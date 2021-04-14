<?php

namespace App\Entity;

use App\Repository\UczyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UczyRepository::class)
 */
class Uczy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $idNauczyciela;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $idPrzedmiotu;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $klasa;

    /**
     * @ORM\Column(type="integer")
     */
    private $ileGodzin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNauczyciela(): ?string
    {
        return $this->idNauczyciela;
    }

    public function setIdNauczyciela(string $idNauczyciela): self
    {
        $this->idNauczyciela = $idNauczyciela;

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

    public function getKlasa(): ?string
    {
        return $this->klasa;
    }

    public function setKlasa(string $klasa): self
    {
        $this->klasa = $klasa;

        return $this;
    }

    public function getIleGodzin(): ?int
    {
        return $this->ileGodzin;
    }

    public function setIleGodzin(int $ileGodzin): self
    {
        $this->ileGodzin = $ileGodzin;

        return $this;
    }
}
