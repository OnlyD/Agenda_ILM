<?php
namespace src\Agenda_ILM\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 */

class Users implements UserInterface
{
    //Implementacion de la interfaz de roles
    public function equals(UserInterface $users){
        return $this->getEmail()==$users->getUsername();
    }
    public function eraseCredentials() {
        return false;
    }
    public function getRoles() {
        return array($this->getRole());
    }
    public function getUsername() {
        return $this->getEmail();
    }
    public function getSalt() {
        return false;
    }
}
