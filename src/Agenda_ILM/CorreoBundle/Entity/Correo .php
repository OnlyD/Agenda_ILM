<?php

namespace Agenda_ILM\CorreoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correo 
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Correo 
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
     * @ORM\Column(name="CorreoElectronico", type="string")
     */
    private $CorreoElectronico;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\TipoDatoBundle\Entity\TipoDato")
     */
    private $TipoTelefono;

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
     * Set CorreoElectronico
     *
     * @param string $correoElectronico
     * @return Correo 
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->CorreoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get CorreoElectronico
     *
     * @return string 
     */
    public function getCorreoElectronico()
    {
        return $this->CorreoElectronico;
    }

    /**
     * Set TipoTelefono
     *
     * @param integer $tipoTelefono
     * @return Correo 
     */
    public function setTipoTelefono(\Agenda_ILM\TipoDatoBundle\Entity\TipoDato $tipoTelefono)
    {
        $this->TipoTelefono = $tipoTelefono;

        return $this;
    }

    /**
     * Get TipoTelefono
     *
     * @return integer 
     */
    public function getTipoTelefono()
    {
        return $this->TipoTelefono;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Correo 
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
     * @return Correo 
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
     * @return Correo 
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
