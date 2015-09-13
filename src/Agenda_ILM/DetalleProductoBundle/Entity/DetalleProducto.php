<?php

namespace Agenda_ILM\DetalleProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleProducto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class DetalleProducto
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
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\EventoBundle\Entity\Evento")
     */
    private $IdEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionProductoNuevo", type="string")
     */
    private $DescripcionProductoNuevo;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\ProductoBundle\Entity\Producto")
     */
    private $IdProducto;

    /**
     * @var float
     *
     * @ORM\Column(name="PrecioCotizado", type="float")
     */
    private $PrecioCotizado;

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
     * Set IdEvento
     *
     * @param integer $idEvento
     * @return DetalleProducto
     */
    public function setIdEvento(\Agenda_ILM\EventoBundle\Entity\Evento $idEvento)
    {
        $this->IdEvento = $idEvento;

        return $this;
    }

    /**
     * Get IdEvento
     *
     * @return integer 
     */
    public function getIdEvento()
    {
        return $this->IdEvento;
    }

    /**
     * Set DescripcionProductoNuevo
     *
     * @param string $descripcionProductoNuevo
     * @return DetalleProducto
     */
    public function setDescripcionProductoNuevo($descripcionProductoNuevo)
    {
        $this->DescripcionProductoNuevo = $descripcionProductoNuevo;

        return $this;
    }

    /**
     * Get DescripcionProductoNuevo
     *
     * @return string 
     */
    public function getDescripcionProductoNuevo()
    {
        return $this->DescripcionProductoNuevo;
    }

    /**
     * Set IdProducto
     *
     * @param integer $idProducto
     * @return DetalleProducto
     */
    public function setIdProducto(\Agenda_ILM\ProductoBundle\Entity\Producto $idProducto)
    {
        $this->IdProducto = $idProducto;

        return $this;
    }

    /**
     * Get IdProducto
     *
     * @return integer 
     */
    public function getIdProducto()
    {
        return $this->IdProducto;
    }

    /**
     * Set PrecioCotizado
     *
     * @param float $precioCotizado
     * @return DetalleProducto
     */
    public function setPrecioCotizado($precioCotizado)
    {
        $this->PrecioCotizado = $precioCotizado;

        return $this;
    }

    /**
     * Get PrecioCotizado
     *
     * @return float 
     */
    public function getPrecioCotizado()
    {
        return $this->PrecioCotizado;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return DetalleProducto
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
     * @return DetalleProducto
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
     * @return DetalleProducto
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
