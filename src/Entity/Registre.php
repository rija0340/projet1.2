<?php

namespace App\Entity;

use App\Repository\RegistreRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=RegistreRepository::class)
  @ApiResource
 */
class Registre
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
    private $tonga_rehetra;

    /**
     * @ORM\Column(type="integer")
     */
    private $mambra_tonga;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mpamangy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nianatra_impito;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $asa_soa;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fampianarana_baiboly;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boky_trakta;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $seminera_kaoferansa;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $alasarona;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nahavita_famp_taratasy;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $batisa_tami;

    /**
     * @ORM\Column(type="date")
     */
    private $date_registre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $asafi;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbr_mambra_kilasy;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $fanatitra;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTongaRehetra(): ?int
    {
        return $this->tonga_rehetra;
    }

    public function setTongaRehetra(int $tonga_rehetra): self
    {
        $this->tonga_rehetra = $tonga_rehetra;

        return $this;
    }

    public function getMambraTonga(): ?int
    {
        return $this->mambra_tonga;
    }

    public function setMambraTonga(int $mambra_tonga): self
    {
        $this->mambra_tonga = $mambra_tonga;

        return $this;
    }

    public function getMpamangy(): ?int
    {
        return $this->mpamangy;
    }

    public function setMpamangy(?int $mpamangy): self
    {
        $this->mpamangy = $mpamangy;

        return $this;
    }

    public function getNianatraImpito(): ?int
    {
        return $this->nianatra_impito;
    }

    public function setNianatraImpito(?int $nianatra_impito): self
    {
        $this->nianatra_impito = $nianatra_impito;

        return $this;
    }

    public function getAsaSoa(): ?int
    {
        return $this->asa_soa;
    }

    public function setAsaSoa(?int $asa_soa): self
    {
        $this->asa_soa = $asa_soa;

        return $this;
    }

    public function getFampianaranaBaiboly(): ?int
    {
        return $this->fampianarana_baiboly;
    }

    public function setFampianaranaBaiboly(?int $fampianarana_baiboly): self
    {
        $this->fampianarana_baiboly = $fampianarana_baiboly;

        return $this;
    }

    public function getBokyTrakta(): ?int
    {
        return $this->boky_trakta;
    }

    public function setBokyTrakta(?int $boky_trakta): self
    {
        $this->boky_trakta = $boky_trakta;

        return $this;
    }

    public function getSemineraKaoferansa(): ?int
    {
        return $this->seminera_kaoferansa;
    }

    public function setSemineraKaoferansa(?int $seminera_kaoferansa): self
    {
        $this->seminera_kaoferansa = $seminera_kaoferansa;

        return $this;
    }

    public function getAlasarona(): ?int
    {
        return $this->alasarona;
    }

    public function setAlasarona(?int $alasarona): self
    {
        $this->alasarona = $alasarona;

        return $this;
    }

    public function getNahavitaFampTaratasy(): ?int
    {
        return $this->nahavita_famp_taratasy;
    }

    public function setNahavitaFampTaratasy(?int $nahavita_famp_taratasy): self
    {
        $this->nahavita_famp_taratasy = $nahavita_famp_taratasy;

        return $this;
    }

    public function getBatisaTami(): ?int
    {
        return $this->batisa_tami;
    }

    public function setBatisaTami(?int $batisa_tami): self
    {
        $this->batisa_tami = $batisa_tami;

        return $this;
    }

    public function getDateRegistre(): ?\DateTimeInterface
    {
        return $this->date_registre;
    }

    public function setDateRegistre(\DateTimeInterface $date_registre): self
    {
        $this->date_registre = $date_registre;

        return $this;
    }

    public function getAsafi(): ?int
    {
        return $this->asafi;
    }

    public function setAsafi(?int $asafi): self
    {
        $this->asafi = $asafi;

        return $this;
    }

    public function getNbrMambraKilasy(): ?int
    {
        return $this->nbr_mambra_kilasy;
    }

    public function setNbrMambraKilasy(?int $nbr_mambra_kilasy): self
    {
        $this->nbr_mambra_kilasy = $nbr_mambra_kilasy;

        return $this;
    }

    public function getFanatitra(): ?float
    {
        return $this->fanatitra;
    }

    public function setFanatitra(?float $fanatitra): self
    {
        $this->fanatitra = $fanatitra;

        return $this;
    }
}
