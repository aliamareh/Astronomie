<?php

namespace App\Entity;

use App\Repository\ObjetCelesteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjetCelesteRepository::class)]
class ObjetCeleste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $IC_NGC;

    #[ORM\Column(type: 'string', length: 255)]
    private $Name;

    #[ORM\ManyToOne(targetEntity: MessierCatalogue::class, inversedBy: 'yes')]
    private $Messier;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $NGC;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $IC;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Object_Type_abrev;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Object_type;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ra;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $declinaison;

    #[ORM\ManyToOne(targetEntity: Constellation::class, inversedBy: 'yes')]
    private $Code_Constellation;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2, nullable: true)]
    private $Major_axis;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2, nullable: true)]
    private $Minor_axis;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $Position_angle;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $b_mag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $v_mag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $j_mag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $h_mag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $k_mag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $Surface_Brigthness;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Hubble_Galaxies;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $Cstar_UMag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $Cstar_BMag;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 2, nullable: true)]
    private $Cstar_VMag;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Cstar_Names;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $identifiers;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $common_names;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ned_notes;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $openngc_notes;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Pictures;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getICNGC(): ?string
    {
        return $this->IC_NGC;
    }

    public function setICNGC(?string $IC_NGC): self
    {
        $this->IC_NGC = $IC_NGC;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getMessier(): ?MessierCatalogue
    {
        return $this->Messier;
    }

    public function setMessier(?MessierCatalogue $Messier): self
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

    public function getIC(): ?string
    {
        return $this->IC;
    }

    public function setIC(?string $IC): self
    {
        $this->IC = $IC;

        return $this;
    }

    public function getObjectTypeAbrev(): ?string
    {
        return $this->Object_Type_abrev;
    }

    public function setObjectTypeAbrev(?string $Object_Type_abrev): self
    {
        $this->Object_Type_abrev = $Object_Type_abrev;

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

    public function getRa(): ?string
    {
        return $this->ra;
    }

    public function setRa(?string $ra): self
    {
        $this->ra = $ra;

        return $this;
    }

    public function getDeclinaison(): ?string
    {
        return $this->declinaison;
    }

    public function setDeclinaison(?string $declinaison): self
    {
        $this->declinaison = $declinaison;

        return $this;
    }

    public function getCodeConstellation(): ?Constellation
    {
        return $this->Code_Constellation;
    }

    public function setCodeConstellation(?Constellation $Code_Constellation): self
    {
        $this->Code_Constellation = $Code_Constellation;

        return $this;
    }

    public function getMajorAxis(): ?string
    {
        return $this->Major_axis;
    }

    public function setMajorAxis(?string $Major_axis): self
    {
        $this->Major_axis = $Major_axis;

        return $this;
    }

    public function getMinorAxis(): ?string
    {
        return $this->Minor_axis;
    }

    public function setMinorAxis(?string $Minor_axis): self
    {
        $this->Minor_axis = $Minor_axis;

        return $this;
    }

    public function getPositionAngle(): ?int
    {
        return $this->Position_angle;
    }

    public function setPositionAngle(?int $Position_angle): self
    {
        $this->Position_angle = $Position_angle;

        return $this;
    }

    public function getBMag(): ?string
    {
        return $this->b_mag;
    }

    public function setBMag(?string $b_mag): self
    {
        $this->b_mag = $b_mag;

        return $this;
    }

    public function getVMag(): ?string
    {
        return $this->v_mag;
    }

    public function setVMag(?string $v_mag): self
    {
        $this->v_mag = $v_mag;

        return $this;
    }

    public function getJMag(): ?string
    {
        return $this->j_mag;
    }

    public function setJMag(?string $j_mag): self
    {
        $this->j_mag = $j_mag;

        return $this;
    }

    public function getHMag(): ?string
    {
        return $this->h_mag;
    }

    public function setHMag(?string $h_mag): self
    {
        $this->h_mag = $h_mag;

        return $this;
    }

    public function getKMag(): ?string
    {
        return $this->k_mag;
    }

    public function setKMag(?string $k_mag): self
    {
        $this->k_mag = $k_mag;

        return $this;
    }

    public function getSurfaceBrigthness(): ?string
    {
        return $this->Surface_Brigthness;
    }

    public function setSurfaceBrigthness(?string $Surface_Brigthness): self
    {
        $this->Surface_Brigthness = $Surface_Brigthness;

        return $this;
    }

    public function getHubbleGalaxies(): ?string
    {
        return $this->Hubble_Galaxies;
    }

    public function setHubbleGalaxies(?string $Hubble_Galaxies): self
    {
        $this->Hubble_Galaxies = $Hubble_Galaxies;

        return $this;
    }

    public function getCstarUMag(): ?string
    {
        return $this->Cstar_UMag;
    }

    public function setCstarUMag(?string $Cstar_UMag): self
    {
        $this->Cstar_UMag = $Cstar_UMag;

        return $this;
    }

    public function getCstarBMag(): ?string
    {
        return $this->Cstar_BMag;
    }

    public function setCstarBMag(?string $Cstar_BMag): self
    {
        $this->Cstar_BMag = $Cstar_BMag;

        return $this;
    }

    public function getCstarVMag(): ?string
    {
        return $this->Cstar_VMag;
    }

    public function setCstarVMag(?string $Cstar_VMag): self
    {
        $this->Cstar_VMag = $Cstar_VMag;

        return $this;
    }

    public function getCstarNames(): ?string
    {
        return $this->Cstar_Names;
    }

    public function setCstarNames(?string $Cstar_Names): self
    {
        $this->Cstar_Names = $Cstar_Names;

        return $this;
    }

    public function getIdentifiers(): ?string
    {
        return $this->identifiers;
    }

    public function setIdentifiers(?string $identifiers): self
    {
        $this->identifiers = $identifiers;

        return $this;
    }

    public function getCommonNames(): ?string
    {
        return $this->common_names;
    }

    public function setCommonNames(?string $common_names): self
    {
        $this->common_names = $common_names;

        return $this;
    }

    public function getNedNotes(): ?string
    {
        return $this->ned_notes;
    }

    public function setNedNotes(?string $ned_notes): self
    {
        $this->ned_notes = $ned_notes;

        return $this;
    }

    public function getOpenngcNotes(): ?string
    {
        return $this->openngc_notes;
    }

    public function setOpenngcNotes(?string $openngc_notes): self
    {
        $this->openngc_notes = $openngc_notes;

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

}
