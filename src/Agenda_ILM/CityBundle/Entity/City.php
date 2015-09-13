<?php

namespace Agenda_ILM\CityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class City
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
     * @ORM\Column(name="Name", type="string", length=35)
     */
    private $Name;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\CountryBundle\Entity\Country")
     */
    private $CountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="District", type="string", length=20)
     */
    private $District;

    /**
     * @var integer
     *
     * @ORM\Column(name="Population", type="integer")
     */
    private $Population;

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
     * Set Name
     *
     * @param string $name
     * @return City
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
     * Set CountryCode
     *
     * @param string $countryCode
     * @return City
     */
    public function setCountryCode(\Agenda_ILM\CountryBundle\Entity\Country $countryCode)
    {
        $this->CountryCode = $countryCode;

        return $this;
    }

    /**
     * Get CountryCode
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Set District
     *
     * @param string $district
     * @return City
     */
    public function setDistrict($district)
    {
        $this->District = $district;

        return $this;
    }

    /**
     * Get District
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->District;
    }

    /**
     * Set Population
     *
     * @param integer $population
     * @return City
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
     * Set Status
     *
     * @param integer $status
     * @return City
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
     * @return City
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
     * @return City
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
