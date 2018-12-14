<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DecompteRepository")
 * @ORM\Table(name="decomptes")
 */
class Decompte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projet", inversedBy="decomptes")
     * @ORM\JoinColumn(name="projet", referencedColumnName="id", nullable=false)
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Facture", inversedBy="decomptes")
     * @ORM\JoinColumn(name="facture", referencedColumnName="id", nullable=true)
     */
    private $facture;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2)
     */
    private $heuresEffectuees;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2)
     */
    private $heuresFacturees;

    /**
     * @ORM\Column(type="date", options={"comment":"colonne d'audit"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="date", options={"comment":"colonne d'audit"})
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjet(): Projet
    {
        return $this->projet;
    }

    public function setProjet(Projet $projet): Decompte
    {
        $this->projet = $projet;
        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(Facture $facture): Decompte
    {
        $this->facture = $facture;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Projet
    {
        $this->description = $description;
        return $this;
    }

    public function getHeuresEffectuees(): float
    {
        return $this->heuresEffectuees;
    }

    public function setHeuresEffectuees(float $heuresEffectuees): Projet
    {
        $this->heuresEffectuees = $heuresEffectuees;
        return $this;
    }

    public function getHeuresFacturees(): float
    {
        return $this->heuresFacturees;
    }

    public function setHeuresFacturees(float $heuresFacturees): Projet
    {
        $this->heuresFacturees = $heuresFacturees;
        return $this;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt(): Decompte
    {
        $this->createdAt = new \DateTime();
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAt(): Decompte
    {
        $this->updatedAt = new \DateTime();
        return $this;
    }
}
