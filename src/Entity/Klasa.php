<?php

namespace App\Entity;

use App\Repository\KlasaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KlasaRepository::class)
 */
class Klasa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nazwa;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $specjalnosc;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $idNauczyciela;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getSpecjalnosc(): ?string
    {
        return $this->specjalnosc;
    }

    public function setSpecjalnosc(?string $specjalnosc): self
    {
        $this->specjalnosc = $specjalnosc;

        return $this;
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
}
