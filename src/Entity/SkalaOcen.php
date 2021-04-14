<?php

namespace App\Entity;

use App\Repository\SkalaOcenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkalaOcenRepository::class)
 */
class SkalaOcen
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
    private $Ocena;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    private $ocenaSlowna;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getOcenaSlowna(): ?string
    {
        return $this->ocenaSlowna;
    }

    public function setOcenaSlowna(?string $ocenaSlowna): self
    {
        $this->ocenaSlowna = $ocenaSlowna;

        return $this;
    }
}
