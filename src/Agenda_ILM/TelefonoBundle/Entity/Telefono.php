<?php

namespace Agenda_ILM\TelefonoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Telefono
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
     * @ORM\Column(name="Numero", type="string")
     */
    private $Numero;

    /**
     * @var string
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
     * Set Numero
     *
     * @param string $numero
     * @return Telefono
     */
    public function setNumero($numero)
    {
        $this->Numero = $numero;

        return $this;
    }

    /**
     * Get Numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * Set TipoTelefono
     *
     * @param string $tipoTelefono
     * @return Telefono
     */
    public function setTipoTelefono(\Agenda_ILM\TipoDatoBundle\Entity\TipoDato $tipoTelefono)
    {
        $this->TipoTelefono = $tipoTelefono;

        return $this;
    }

    /**
     * Get TipoTelefono
     *
     * @return string 
     */
    public function getTipoTelefono()
    {
        return $this->TipoTelefono;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Telefono
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
     * @return Telefono
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
     * @return Telefono
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
