<?php

namespace Agenda_ILM\ContactoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contacto
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="curp", type="string", length=255)
     */
    private $curp;

    /**
     * @var string
     *
     * @ORM\Column(name="rfc", type="string", length=255)
     */
    private $rfc;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\ProveedorBundle\Entity\Proveedor")
     */
    private $idProveedor;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\ClienteBundle\Entity\Cliente")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaModificacion", type="datetime")
     */
    private $fechaModificacion;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Contacto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set curp
     *
     * @param string $curp
     * @return Contacto
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string 
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     * @return Contacto
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set idProveedor
     *
     * @param integer $idProveedor
     * @return Contacto
     */
    public function setIdProveedor(\Agenda_ILM\ProveedorBundle\Entity\Proveedor $idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return integer 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     * @return Contacto
     */
    public function setIdCliente(\Agenda_ILM\ClienteBundle\Entity\Cliente $idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Contacto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Contacto
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     * @return Contacto
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
}
