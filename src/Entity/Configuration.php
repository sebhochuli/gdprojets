<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigurationRepository")
 * @ORM\Table(name="configuration")
 */
class Configuration
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): Configuration
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Configuration
    {
        $this->nom = $nom;
        return $this;
    }

    public function getRue(): string
    {
        return $this->rue;
    }

    public function setRue(string $rue): Configuration
    {
        $this->rue = $rue;
        return $this;
    }

    public function getNpa(): string
    {
        return $this->npa;
    }

    public function setNpa(string $npa): Configuration
    {
        $this->npa = $npa;
        return $this;
    }

    public function getLocalite(): string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): Configuration
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
    public function setCreatedAt(): Configuration
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
    public function setUpdatedAt(): Configuration
    {
        $this->updatedAt = new \DateTime();
        return $this;
    }
}
