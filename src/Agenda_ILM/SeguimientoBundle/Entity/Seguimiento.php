<?php

namespace Agenda_ILM\SeguimientoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguimiento
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Seguimiento
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $Fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string")
     */
    private $Nota;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\EventoBundle\Entity\Evento")
     */
    private $IdEvento;

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
     * Set Fecha
     *
     * @param \DateTime $fecha
     * @return Seguimiento
     */
    public function setFecha($fecha)
    {
        $this->Fecha = $fecha;

        return $this;
    }

    /**
     * Get Fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->Fecha;
    }

    /**
     * Set Nota
     *
     * @param string $nota
     * @return Seguimiento
     */
    public function setNota($nota)
    {
        $this->Nota = $nota;

        return $this;
    }

    /**
     * Get Nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->Nota;
    }

    /**
     * Set IdEvento
     *
     * @param integer $idEvento
     * @return Seguimiento
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
     * Set Status
     *
     * @param integer $status
     * @return Seguimiento
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
     * @return Seguimiento
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
     * @return Seguimiento
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
