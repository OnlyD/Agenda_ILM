<?php

namespace Agenda_ILM\EstadoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estado
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
     * @ORM\Column(name="Nombre_Estado", type="string", length=100)
     */
    private $Nombre_Estado;


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
     * Set Nombre_Estado
     *
     * @param string $nombreEstado
     * @return Estado
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->Nombre_Estado = $nombreEstado;
    
        return $this;
    }

    /**
     * Get Nombre_Estado
     *
     * @return string 
     */
    public function getNombreEstado()
    {
        return $this->Nombre_Estado;
    }
}
