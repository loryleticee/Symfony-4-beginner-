<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NoteRepository")
 */
class Note
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Accord")
     */
    private $accord;

    public function __construct()
    {
        $this->accord = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Accord[]
     */
    public function getAccord(): Collection
    {
        return $this->accord;
    }

    public function addAccord(Accord $accord): self
    {
        if (!$this->accord->contains($accord)) {
            $this->accord[] = $accord;
        }

        return $this;
    }

    public function removeAccord(Accord $accord): self
    {
        if ($this->accord->contains($accord)) {
            $this->accord->removeElement($accord);
        }

        return $this;
    }
}
