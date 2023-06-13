<?php

namespace App\Entity;

use App\Repository\MessierCatalogueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessierCatalogueRepository::class)]
class MessierCatalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Messier;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $NGC;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Object_type;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Season;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Magnitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Constellation_EN;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Constellation_FR;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Constellation_Latin;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $RA_Right_Ascension;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Dec_Declinaison;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Distance_ly_a_l;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Size_Dimension;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Discoverer;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Year_Annee;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Pictures;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $URL_de_limage;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Constellation;

    #[ORM\OneToMany(mappedBy: 'Messier', targetEntity: ObjetCeleste::class)]
    private $yes;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessier(): ?string
    {
        return $this->Messier;
    }

    public function setMessier(string $Messier): self
    {
        $this->Messier = $Messier;

        return $this;
    }

    public function getNGC(): ?string
    {
        return $this->NGC;
    }

    public function setNGC(?string $NGC): self
    {
        $this->NGC = $NGC;

        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->Object_type;
    }

    public function setObjectType(?string $Object_type): self
    {
        $this->Object_type = $Object_type;

        return $this;
    }

    public function getSeason(): ?string
    {
        return $this->Season;
    }

    public function setSeason(?string $Season): self
    {
        $this->Season = $Season;

        return $this;
    }

    public function getMagnitude(): ?int
    {
        return $this->Magnitude;
    }

    public function setMagnitude(?int $Magnitude): self
    {
        $this->Magnitude = $Magnitude;

        return $this;
    }

    public function getConstellationEN(): ?string
    {
        return $this->Constellation_EN;
    }

    public function setConstellationEN(?string $Constellation_EN): self
    {
        $this->Constellation_EN = $Constellation_EN;

        return $this;
    }

    public function getConstellationFR(): ?string
    {
        return $this->Constellation_FR;
    }

    public function setConstellationFR(?string $Constellation_FR): self
    {
        $this->Constellation_FR = $Constellation_FR;

        return $this;
    }

    public function getConstellationLatin(): ?string
    {
        return $this->Constellation_Latin;
    }

    public function setConstellationLatin(?string $Constellation_Latin): self
    {
        $this->Constellation_Latin = $Constellation_Latin;

        return $this;
    }

    public function getRARightAscension(): ?string
    {
        return $this->RA_Right_Ascension;
    }

    public function setRARightAscension(?string $RA_Right_Ascension): self
    {
        $this->RA_Right_Ascension = $RA_Right_Ascension;

        return $this;
    }

    public function getDecDeclinaison(): ?string
    {
        return $this->Dec_Declinaison;
    }

    public function setDecDeclinaison(?string $Dec_Declinaison): self
    {
        $this->Dec_Declinaison = $Dec_Declinaison;

        return $this;
    }

    public function getDistanceLyAL(): ?int
    {
        return $this->Distance_ly_a_l;
    }

    public function setDistanceLyAL(?int $Distance_ly_a_l): self
    {
        $this->Distance_ly_a_l = $Distance_ly_a_l;

        return $this;
    }

    public function getSizeDimension(): ?string
    {
        return $this->Size_Dimension;
    }

    public function setSizeDimension(?string $Size_Dimension): self
    {
        $this->Size_Dimension = $Size_Dimension;

        return $this;
    }

    public function getDiscoverer(): ?string
    {
        return $this->Discoverer;
    }

    public function setDiscoverer(?string $Discoverer): self
    {
        $this->Discoverer = $Discoverer;

        return $this;
    }

    public function getYearAnnee(): ?int
    {
        return $this->Year_Annee;
    }

    public function setYearAnnee(?int $Year_Annee): self
    {
        $this->Year_Annee = $Year_Annee;

        return $this;
    }

    public function getPictures(): ?string
    {
        return $this->Pictures;
    }

    public function setPictures(?string $Pictures): self
    {
        $this->Pictures = $Pictures;

        return $this;
    }

    public function getURLDeLimage(): ?string
    {
        return $this->URL_de_limage;
    }

    public function setURLDeLimage(?string $URL_de_limage): self
    {
        $this->URL_de_limage = $URL_de_limage;

        return $this;
    }

    public function getConstellation(): ?string
    {
        return $this->Constellation;
    }

    public function setConstellation(?string $Constellation): self
    {
        $this->Constellation = $Constellation;

        return $this;
    }

    /**
     * @return Collection<int, ObjetCeleste>
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(ObjetCeleste $ye): self
    {
        if (!$this->yes->contains($ye)) {
            $this->yes[] = $ye;
            $ye->setMessier($this);
        }

        return $this;
    }

    public function removeYe(ObjetCeleste $ye): self
    {
        if ($this->yes->removeElement($ye)) {
            // set the owning side to null (unless already changed)
            if ($ye->getMessier() === $this) {
                $ye->setMessier(null);
            }
        }

        return $this;
    }
}
