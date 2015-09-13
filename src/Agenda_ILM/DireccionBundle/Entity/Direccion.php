<?php

namespace Agenda_ILM\DireccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Direccion
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
     * @ORM\Column(name="Domicilio", type="string")
     */
    private $Domicilio;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\TipoDatoBundle\Entity\TipoDato")
     */
    private $tipoDireccion;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoPostal", type="string", length=5)
     */
    private $CodigoPostal;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\CityBundle\Entity\City")
     */
    private $IdCity;

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
     * Set Domicilio
     *
     * @param string $domicilio
     * @return Direccion
     */
    public function setDomicilio($domicilio)
    {
        $this->Domicilio = $domicilio;

        return $this;
    }

    /**
     * Get Domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->Domicilio;
    }

    /**
     * Set tipoDireccion
     *
     * @param integer $tipoDireccion
     * @return Direccion
     */
    public function setTipoDireccion(\Agenda_ILM\TipoDatoBundle\Entity\TipoDato $tipoDireccion)
    {
        $this->tipoDireccion = $tipoDireccion;

        return $this;
    }

    /**
     * Get tipoDireccion
     *
     * @return integer 
     */
    public function getTipoDireccion()
    {
        return $this->tipoDireccion;
    }

    /**
     * Set CodigoPostal
     *
     * @param string $codigoPostal
     * @return Direccion
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->CodigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get CodigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->CodigoPostal;
    }

    /**
     * Set IdCity
     *
     * @param integer $idCity
     * @return Direccion
     */
    public function setIdCity(\Agenda_ILM\CityBundle\Entity\City $idCity)
    {
        $this->IdCity = $idCity;

        return $this;
    }

    /**
     * Get IdCity
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->IdCity;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Direccion
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
     * @return Direccion
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
     * @return Direccion
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
