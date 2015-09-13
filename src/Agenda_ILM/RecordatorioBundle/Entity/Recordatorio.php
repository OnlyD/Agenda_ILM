<?php

namespace Agenda_ILM\RecordatorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recordatorio
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Recordatorio
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
     * @ORM\ManyToOne(targetEntity="Agenda_ILM\SeguimientoBundle\Entity\Seguimiento")
     */
    private $IdSeguimiento;

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
     * @return Recordatorio
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
     * @return Recordatorio
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
     * Set IdSeguimiento
     *
     * @param integer $idSeguimiento
     * @return Recordatorio
     */
    public function setIdSeguimiento(\Agenda_ILM\SeguimientoBundle\Entity\Seguimiento $idSeguimiento)
    {
        $this->IdSeguimiento = $idSeguimiento;

        return $this;
    }

    /**
     * Get IdSeguimiento
     *
     * @return integer 
     */
    public function getIdSeguimiento()
    {
        return $this->IdSeguimiento;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Recordatorio
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
     * @return Recordatorio
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
     * @return Recordatorio
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
