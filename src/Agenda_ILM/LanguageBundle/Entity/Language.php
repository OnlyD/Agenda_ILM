<?php

namespace Agenda_ILM\LanguageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Language
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Language
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
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\CountryBundle\Entity\Country")
     */
    private $CountryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Language", type="string", length=30)
     */
    private $Language;

    /**
     * @var string
     *
     * @ORM\Column(name="IsOfficial", type="string")
     */
    private $IsOfficial;

    /**
     * @var float
     *
     * @ORM\Column(name="Percentage", type="float")
     */
    private $Percentage;

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
     * Set CountryCode
     *
     * @param string $countryCode
     * @return Language
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
     * Set Language
     *
     * @param string $language
     * @return Language
     */
    public function setLanguage($language)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * Get Language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Set IsOfficial
     *
     * @param string $isOfficial
     * @return Language
     */
    public function setIsOfficial($isOfficial)
    {
        $this->IsOfficial = $isOfficial;

        return $this;
    }

    /**
     * Get IsOfficial
     *
     * @return string 
     */
    public function getIsOfficial()
    {
        return $this->IsOfficial;
    }

    /**
     * Set Percentage
     *
     * @param float $percentage
     * @return Language
     */
    public function setPercentage($percentage)
    {
        $this->Percentage = $percentage;

        return $this;
    }

    /**
     * Get Percentage
     *
     * @return float 
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Language
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
     * @return Language
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
     * @return Language
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
