<?php

namespace Agenda_ILM\EventoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Evento
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
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\ContactoBundle\Entity\Contacto")
     */
    
    private $IdContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string")
     */
    private $Descripcion;

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
     * Set IdContacto
     *
     * @param integer $idContacto
     * @return Evento
     */
    public function setIdContacto($idContacto)
    {
        $this->IdContacto = $idContacto;

        return $this;
    }

    /**
     * Get IdContacto
     *
     * @return integer 
     */
    public function getIdContacto()
    {
        return $this->IdContacto;
    }

    /**
     * Set Descripcion
     *
     * @param string $descripcion
     * @return Evento
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;

        return $this;
    }

    /**
     * Get Descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
