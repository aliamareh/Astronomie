<?php

namespace App\Entity;

use App\Repository\ConstellationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConstellationRepository::class)]
class Constellation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Observation_Season;

    #[ORM\Column(type: 'string', length: 255)]
    private $Code_Constellation;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Latin_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $French_name;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $English_name;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 3, nullable: true)]
    private $area_in_square_degrees;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Dec_Declinaison;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $RA_Right_Ascension;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Principal_star;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $area_celestial_sphere;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zone_celestial_equator;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zone_ecliptic;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $zone_Milky_Way;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Quad;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Name_origin;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Pictures;

    #[ORM\OneToMany(mappedBy: 'Code_Constellation', targetEntity: ObjetCeleste::class)]
    private $yes;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObservationSeason(): ?string
    {
        return $this->Observation_Season;
    }

    public function setObservationSeason(?string $Observation_Season): self
    {
        $this->Observation_Season = $Observation_Season;

        return $this;
    }

    public function getCodeConstellation(): ?string
    {
        return $this->Code_Constellation;
    }

    public function setCodeConstellation(string $Code_Constellation): self
    {
        $this->Code_Constellation = $Code_Constellation;

        return $this;
    }

    public function getLatinName(): ?string
    {
        return $this->Latin_name;
    }

    public function setLatinName(?string $Latin_name): self
    {
        $this->Latin_name = $Latin_name;

        return $this;
    }

    public function getFrenchName(): ?string
    {
        return $this->French_name;
    }

    public function setFrenchName(?string $French_name): self
    {
        $this->French_name = $French_name;

        return $this;
    }

    public function getEnglishName(): ?string
    {
        return $this->English_name;
    }

    public function setEnglishName(?string $English_name): self
    {
        $this->English_name = $English_name;

        return $this;
    }

    public function getAreaInSquareDegrees(): ?string
    {
        return $this->area_in_square_degrees;
    }

    public function setAreaInSquareDegrees(?string $area_in_square_degrees): self
    {
        $this->area_in_square_degrees = $area_in_square_degrees;

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

    public function getRARightAscension(): ?string
    {
        return $this->RA_Right_Ascension;
    }

    public function setRARightAscension(?string $RA_Right_Ascension): self
    {
        $this->RA_Right_Ascension = $RA_Right_Ascension;

        return $this;
    }

    public function getPrincipalStar(): ?string
    {
        return $this->Principal_star;
    }

    public function setPrincipalStar(?string $Principal_star): self
    {
        $this->Principal_star = $Principal_star;

        return $this;
    }

    public function getAreaCelestialSphere(): ?string
    {
        return $this->area_celestial_sphere;
    }

    public function setAreaCelestialSphere(?string $area_celestial_sphere): self
    {
        $this->area_celestial_sphere = $area_celestial_sphere;

        return $this;
    }

    public function getZoneCelestialEquator(): ?string
    {
        return $this->zone_celestial_equator;
    }

    public function setZoneCelestialEquator(?string $zone_celestial_equator): self
    {
        $this->zone_celestial_equator = $zone_celestial_equator;

        return $this;
    }

    public function getZoneEcliptic(): ?string
    {
        return $this->zone_ecliptic;
    }

    public function setZoneEcliptic(?string $zone_ecliptic): self
    {
        $this->zone_ecliptic = $zone_ecliptic;

        return $this;
    }

    public function getZoneMilkyWay(): ?string
    {
        return $this->zone_Milky_Way;
    }

    public function setZoneMilkyWay(?string $zone_Milky_Way): self
    {
        $this->zone_Milky_Way = $zone_Milky_Way;

        return $this;
    }

    public function getQuad(): ?string
    {
        return $this->Quad;
    }

    public function setQuad(?string $Quad): self
    {
        $this->Quad = $Quad;

        return $this;
    }

    public function getNameOrigin(): ?string
    {
        return $this->Name_origin;
    }

    public function setNameOrigin(?string $Name_origin): self
    {
        $this->Name_origin = $Name_origin;

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
            $ye->setCodeConstellation($this);
        }

        return $this;
    }

    public function removeYe(ObjetCeleste $ye): self
    {
        if ($this->yes->removeElement($ye)) {
            // set the owning side to null (unless already changed)
            if ($ye->getCodeConstellation() === $this) {
                $ye->setCodeConstellation(null);
            }
        }

        return $this;
    }
}
