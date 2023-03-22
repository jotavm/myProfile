<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PaisesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaisesRepository::class)]
#[ApiResource]
class Paises
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?bool $estado = null;

    #[ORM\Column(length: 5)]
    private ?string $prefijo = null;

    #[ORM\OneToMany(mappedBy: 'pais', targetEntity: Persona::class)]
    private Collection $personas;

    public function __toString()
    {
        return $this->nombre;
    }

    public function __construct()
    {
        $this->personas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function isEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getPrefijo(): ?string
    {
        return $this->prefijo;
    }

    public function setPrefijo(string $prefijo): self
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * @return Collection<int, Persona>
     */
    public function getPersonas(): Collection
    {
        return $this->personas;
    }

    public function addPersona(Persona $persona): self
    {
        if (!$this->personas->contains($persona)) {
            $this->personas->add($persona);
            $persona->setPais($this);
        }

        return $this;
    }

    public function removePersona(Persona $persona): self
    {
        if ($this->personas->removeElement($persona)) {
            // set the owning side to null (unless already changed)
            if ($persona->getPais() === $this) {
                $persona->setPais(null);
            }
        }

        return $this;
    }
}
