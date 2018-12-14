<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 * @ORM\Table(name="clients")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $rue;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $npa;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $localite;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): Client
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Client
    {
        $this->nom = $nom;
        return $this;
    }

    public function getRue(): string
    {
        return $this->rue;
    }

    public function setRue(string $rue): Client
    {
        $this->rue = $rue;
        return $this;
    }

    public function getNpa(): string
    {
        return $this->npa;
    }

    public function setNpa(string $npa): Client
    {
        $this->npa = $npa;
        return $this;
    }

    public function getLocalite(): string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): Client
    {
        $this->localite = $localite;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt(): Client
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
    public function setUpdatedAt(): Client
    {
        $this->updatedAt = new \DateTime();
        return $this;
    }
}
