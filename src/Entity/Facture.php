<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 * @ORM\Table(name="factures")
 */
class Facture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projet", inversedBy="factures")
     * @ORM\JoinColumn(name="projet", referencedColumnName="id", nullable=false)
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFacture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSolde;

    /**
     * @ORM\Column(type="date")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="date")
     */
    private $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Facture
    {
        $this->description = $description;
        return $this;
    }

    public function getDateFacture(): \DateTime
    {
        return $this->dateFacture;
    }

    public function setDateFacture(\DateTime $dateFacture): Facture
    {
        $this->dateFacture = $dateFacture;
        return $this;
    }

    public function getDateSolde(): \DateTime
    {
        return $this->dateSolde;
    }

    public function setDateSolde(\DateTime $dateSolde): Facture
    {
        $this->dateSolde = $dateSolde;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt(): Facture
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
    public function setUpdatedAt(): Facture
    {
        $this->updatedAt = new \DateTime();
        return $this;
    }
}
