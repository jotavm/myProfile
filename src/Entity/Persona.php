<?php

namespace App\Entity;

use App\Repository\PersonaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonaRepository::class)]
class Persona
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $primernombre = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $segundonombre = null;

    #[ORM\Column(length: 30)]
    private ?string $primerapellido = null;

    #[ORM\Column(length: 30)]
    private ?string $segundoapellido = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechanacimiento = null;

    #[ORM\Column(length: 20)]
    private ?string $identificacion = null;

    #[ORM\Column(length: 100)]
    private ?string $correo = null;

    #[ORM\Column]
    private ?bool $estado = null;
    
    public function __toString()
    {
        return $this->identificacion .'con correo'. $this->correo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimernombre(): ?string
    {
        return $this->primernombre;
    }

    public function setPrimernombre(string $primernombre): self
    {
        $this->primernombre = $primernombre;

        return $this;
    }

    public function getSegundonombre(): ?string
    {
        return $this->segundonombre;
    }

    public function setSegundonombre(?string $segundonombre): self
    {
        $this->segundonombre = $segundonombre;

        return $this;
    }

    public function getPrimerapellido(): ?string
    {
        return $this->primerapellido;
    }

    public function setPrimerapellido(string $primerapellido): self
    {
        $this->primerapellido = $primerapellido;

        return $this;
    }

    public function getSegundoapellido(): ?string
    {
        return $this->segundoapellido;
    }

    public function setSegundoapellido(string $segundoapellido): self
    {
        $this->segundoapellido = $segundoapellido;

        return $this;
    }

    public function getFechanacimiento(): ?\DateTimeInterface
    {
        return $this->fechanacimiento;
    }

    public function setFechanacimiento(\DateTimeInterface $fechanacimiento): self
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    public function getIdentificacion(): ?string
    {
        return $this->identificacion;
    }

    public function setIdentificacion(string $identificacion): self
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

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
}
