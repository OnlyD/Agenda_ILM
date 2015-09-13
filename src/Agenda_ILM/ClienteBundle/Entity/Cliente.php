<?php

namespace Agenda_ILM\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cliente
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
     * @var boolean
     *
     * @ORM\Column(name="PosibleCliente", type="boolean")
     */
    private $PosibleCliente;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\CorreoBundle\Entity\Correo")
     */
    private $IdCorreo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\TelefonoBundle\Entity\Telefono")
     */
    private $IdTelefono;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\DireccionBundle\Entity\Direccion")
     */
    private $IdDireccion;

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
     * Set PosibleCliente
     *
     * @param boolean $posibleCliente
     * @return Cliente
     */
    public function setPosibleCliente($posibleCliente)
    {
        $this->PosibleCliente = $posibleCliente;

        return $this;
    }

    /**
     * Get PosibleCliente
     *
     * @return boolean 
     */
    public function getPosibleCliente()
    {
        return $this->PosibleCliente;
    }

    /**
     * Set IdCorreo
     *
     * @param integer $idCorreo
     * @return Cliente
     */
    public function setIdCorreo(\Agenda_ILM\CorreoBundle\Entity\Correo $idCorreo)
    {
        $this->IdCorreo = $idCorreo;

        return $this;
    }

    /**
     * Get IdCorreo
     *
     * @return integer 
     */
    public function getIdCorreo()
    {
        return $this->IdCorreo;
    }

    /**
     * Set IdTelefono
     *
     * @param integer $idTelefono
     * @return Cliente
     */
    public function setIdTelefono(\Agenda_ILM\TelefonoBundle\Entity\Telefono $idTelefono)
    {
        $this->IdTelefono = $idTelefono;

        return $this;
    }

    /**
     * Get IdTelefono
     *
     * @return integer 
     */
    public function getIdTelefono()
    {
        return $this->IdTelefono;
    }

    /**
     * Set IdDireccion
     *
     * @param integer $idDireccion
     * @return Cliente
     */
    public function setIdDireccion(\Agenda_ILM\DireccionBundle\Entity\Direccion $idDireccion)
    {
        $this->IdDireccion = $idDireccion;

        return $this;
    }

    /**
     * Get IdDireccion
     *
     * @return integer 
     */
    public function getIdDireccion()
    {
        return $this->IdDireccion;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
