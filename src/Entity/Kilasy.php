<?php

namespace App\Entity;

use App\Repository\KilasyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=KilasyRepository::class)
 *  @ApiResource
 */
class Kilasy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Membre::class, mappedBy="kilasy")
     */
    private $membre;

    public function __construct()
    {
        $this->membre = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Membre>
     */
    public function getMembre(): Collection
    {
        return $this->membre;
    }

    public function addMembre(Membre $membre): self
    {
        if (!$this->membre->contains($membre)) {
            $this->membre[] = $membre;
            $membre->setKilasy($this);
        }

        return $this;
    }

    public function removeMembre(Membre $membre): self
    {
        if ($this->membre->removeElement($membre)) {
            // set the owning side to null (unless already changed)
            if ($membre->getKilasy() === $this) {
                $membre->setKilasy(null);
            }
        }

        return $this;
    }
}
