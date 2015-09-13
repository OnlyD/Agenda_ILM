<?php

namespace Agenda_ILM\CountryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=3)
     */
    private $Code;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=52)
     */
    private $Name;

    /**
     * @var string
     *
     * @ORM\Column(name="Continent", type="string")
     */
    private $Continent;

    /**
     * @var string
     *
     * @ORM\Column(name="Region", type="string", length=26)
     */
    private $Region;

    /**
     * @var float
     *
     * @ORM\Column(name="SurfaceArea", type="float")
     */
    private $SurfaceArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="IndepYear", type="smallint")
     */
    private $IndepYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="Population", type="integer")
     */
    private $Population;

    /**
     * @var float
     *
     * @ORM\Column(name="LifeExpectancy", type="float")
     */
    private $LifeExpectancy;

    /**
     * @var float
     *
     * @ORM\Column(name="GNP", type="float")
     */
    private $GNP;

    /**
     * @var float
     *
     * @ORM\Column(name="GNPold", type="float")
     */
    private $GNPold;

    /**
     * @var string
     *
     * @ORM\Column(name="LocalName", type="string", length=45)
     */
    private $LocalName;

    /**
     * @var string
     *
     * @ORM\Column(name="GovernmentForm", type="string", length=45)
     */
    private $GovernmentForm;

    /**
     * @var string
     *
     * @ORM\Column(name="HeadOfState", type="string", length=60)
     */
    private $HeadOfState;

    /**
     * @var integer
     *
     * @ORM\Column(name="Capital", type="integer")
     */
    private $Capital;

    /**
     * @var string
     *
     * @ORM\Column(name="Code2", type="string", length=2)
     */
    private $Code2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer")
     */
    private $Status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCreacion", type="datetime")
     */
    private $FechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaModificacion", type="datetime")
     */
    private $FechaModificacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return Country
     */
    public function setCode($code)
    {
        $this->Code = $code;

        return $this;
    }

    /**
     * Get Code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Continent
     *
     * @param string $continent
     * @return Country
     */
    public function setContinent($continent)
    {
        $this->Continent = $continent;

        return $this;
    }

    /**
     * Get Continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->Continent;
    }

    /**
     * Set Region
     *
     * @param string $region
     * @return Country
     */
    public function setRegion($region)
    {
        $this->Region = $region;

        return $this;
    }

    /**
     * Get Region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * Set SurfaceArea
     *
     * @param float $surfaceArea
     * @return Country
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->SurfaceArea = $surfaceArea;

        return $this;
    }

    /**
     * Get SurfaceArea
     *
     * @return float 
     */
    public function getSurfaceArea()
    {
        return $this->SurfaceArea;
    }

    /**
     * Set IndepYear
     *
     * @param integer $indepYear
     * @return Country
     */
    public function setIndepYear($indepYear)
    {
        $this->IndepYear = $indepYear;

        return $this;
    }

    /**
     * Get IndepYear
     *
     * @return integer 
     */
    public function getIndepYear()
    {
        return $this->IndepYear;
    }

    /**
     * Set Population
     *
     * @param integer $population
     * @return Country
     */
    public function setPopulation($population)
    {
        $this->Population = $population;

        return $this;
    }

    /**
     * Get Population
     *
     * @return integer 
     */
    public function getPopulation()
    {
        return $this->Population;
    }

    /**
     * Set LifeExpectancy
     *
     * @param float $lifeExpectancy
     * @return Country
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->LifeExpectancy = $lifeExpectancy;

        return $this;
    }

    /**
     * Get LifeExpectancy
     *
     * @return float 
     */
    public function getLifeExpectancy()
    {
        return $this->LifeExpectancy;
    }

    /**
     * Set GNP
     *
     * @param float $gNP
     * @return Country
     */
    public function setGNP($gNP)
    {
        $this->GNP = $gNP;

        return $this;
    }

    /**
     * Get GNP
     *
     * @return float 
     */
    public function getGNP()
    {
        return $this->GNP;
    }

    /**
     * Set GNPold
     *
     * @param float $gNPold
     * @return Country
     */
    public function setGNPold($gNPold)
    {
        $this->GNPold = $gNPold;

        return $this;
    }

    /**
     * Get GNPold
     *
     * @return float 
     */
    public function getGNPold()
    {
        return $this->GNPold;
    }

    /**
     * Set LocalName
     *
     * @param string $localName
     * @return Country
     */
    public function setLocalName($localName)
    {
        $this->LocalName = $localName;

        return $this;
    }

    /**
     * Get LocalName
     *
     * @return string 
     */
    public function getLocalName()
    {
        return $this->LocalName;
    }

    /**
     * Set GovernmentForm
     *
     * @param string $governmentForm
     * @return Country
     */
    public function setGovernmentForm($governmentForm)
    {
        $this->GovernmentForm = $governmentForm;

        return $this;
    }

    /**
     * Get GovernmentForm
     *
     * @return string 
     */
    public function getGovernmentForm()
    {
        return $this->GovernmentForm;
    }

    /**
     * Set HeadOfState
     *
     * @param string $headOfState
     * @return Country
     */
    public function setHeadOfState($headOfState)
    {
        $this->HeadOfState = $headOfState;

        return $this;
    }

    /**
     * Get HeadOfState
     *
     * @return string 
     */
    public function getHeadOfState()
    {
        return $this->HeadOfState;
    }

    /**
     * Set Capital
     *
     * @param integer $capital
     * @return Country
     */
    public function setCapital($capital)
    {
        $this->Capital = $capital;

        return $this;
    }

    /**
     * Get Capital
     *
     * @return integer 
     */
    public function getCapital()
    {
        return $this->Capital;
    }

    /**
     * Set Code2
     *
     * @param string $code2
     * @return Country
     */
    public function setCode2($code2)
    {
        $this->Code2 = $code2;

        return $this;
    }

    /**
     * Get Code2
     *
     * @return string 
     */
    public function getCode2()
    {
        return $this->Code2;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Country
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get Status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set FechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Country
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->FechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get FechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->FechaCreacion;
    }

    /**
     * Set FechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Country
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->FechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get FechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->FechaModificacion;
    }
}
