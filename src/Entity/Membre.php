<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=MembreRepository::class)
 *  @ApiResource
 */
class Membre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_bapteme;

    /**
     * @ORM\Column(type="date", length=255, nullable=true)
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $situation_matrimoniale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $occupation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity=Kilasy::class, inversedBy="membre")
     */
    private $kilasy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateBapteme(): ?\DateTimeInterface
    {
        return $this->date_bapteme;
    }

    public function setDateBapteme(?\DateTimeInterface $date_bapteme): self
    {
        $this->date_bapteme = $date_bapteme;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSituationMatrimoniale(): ?string
    {
        return $this->situation_matrimoniale;
    }

    public function setSituationMatrimoniale(?string $situation_matrimoniale): self
    {
        $this->situation_matrimoniale = $situation_matrimoniale;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }

    public function getKilasy(): ?Kilasy
    {
        return $this->kilasy;
    }

    public function setKilasy(?Kilasy $kilasy): self
    {
        $this->kilasy = $kilasy;

        return $this;
    }
}
