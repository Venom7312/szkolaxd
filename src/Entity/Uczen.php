<?php

namespace App\Entity;

use App\Repository\UczenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UczenRepository::class)
 */
class Uczen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $imie;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nazwisko;

    /**
     * @ORM\Column(type="date")
     */
    private $dataUrodzenia;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $miejsceUrodzenia;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $imionaRodzicow;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $miejsceZamieszkania;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dojezdza;

    /**
     * @ORM\Column(type="integer")
     */
    private $mieszka;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImie(): ?string
    {
        return $this->imie;
    }

    public function setImie(string $imie): self
    {
        $this->imie = $imie;

        return $this;
    }

    public function getNazwisko(): ?string
    {
        return $this->nazwisko;
    }

    public function setNazwisko(string $nazwisko): self
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    public function getDataUrodzenia(): ?\DateTimeInterface
    {
        return $this->dataUrodzenia;
    }

    public function setDataUrodzenia(\DateTimeInterface $dataUrodzenia): self
    {
        $this->dataUrodzenia = $dataUrodzenia;

        return $this;
    }

    public function getMiejsceUrodzenia(): ?string
    {
        return $this->miejsceUrodzenia;
    }

    public function setMiejsceUrodzenia(string $miejsceUrodzenia): self
    {
        $this->miejsceUrodzenia = $miejsceUrodzenia;

        return $this;
    }

    public function getImionaRodzicow(): ?string
    {
        return $this->imionaRodzicow;
    }

    public function setImionaRodzicow(string $imionaRodzicow): self
    {
        $this->imionaRodzicow = $imionaRodzicow;

        return $this;
    }

    public function getMiejsceZamieszkania(): ?string
    {
        return $this->miejsceZamieszkania;
    }

    public function setMiejsceZamieszkania(string $miejsceZamieszkania): self
    {
        $this->miejsceZamieszkania = $miejsceZamieszkania;

        return $this;
    }

    public function getDojezdza(): ?bool
    {
        return $this->dojezdza;
    }

    public function setDojezdza(bool $dojezdza): self
    {
        $this->dojezdza = $dojezdza;

        return $this;
    }

    public function getMieszka(): ?int
    {
        return $this->mieszka;
    }

    public function setMieszka(int $mieszka): self
    {
        $this->mieszka = $mieszka;

        return $this;
    }
}
