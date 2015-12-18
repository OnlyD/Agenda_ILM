<?php

namespace Agenda_ILM\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
	function eraseCredentials() 
	{ 
	}
	
	function getRoles() 
	{ 
		return array('ROLE_USUARIO'); 
	}
	
	function getUsername() 
	{ 
		return $this->getEmail(); 
	}
	
	function getSalt()
	{
		
	}

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
     * @ORM\Column(name="Usuario", type="string")
     */
    private $Usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string")
     */
    private $Password;

    /**
     * @var string
     *
     * @ORM\Column(name="Perfil", type="string")
     */
    private $Perfil;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string")
     */
    private $Nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string")
     */
    private $Apellido;

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
     * @var string
     *
     * @ORM\Column(name="Email", type="string")
     */
    private $Email;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string")
     */
    private $Role;


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
     * Set Usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->Usuario = $usuario;
    
        return $this;
    }

    /**
     * Get Usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Set Password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->Password = $password;
    
        return $this;
    }

    /**
     * Get Password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set Perfil
     *
     * @param string $perfil
     * @return Usuario
     */
    public function setPerfil($perfil)
    {
        $this->Perfil = $perfil;
    
        return $this;
    }

    /**
     * Get Perfil
     *
     * @return string 
     */
    public function getPerfil()
    {
        return $this->Perfil;
    }

    /**
     * Set Nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    
        return $this;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set Apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    
        return $this;
    }

    /**
     * Get Apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->Apellido;
    }

    /**
     * Set Status
     *
     * @param integer $status
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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

    /**
     * Set Email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    
        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Role
     *
     * @param string $role
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->Role = $role;
    
        return $this;
    }

    /**
     * Get Role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->Role;
    }
}
