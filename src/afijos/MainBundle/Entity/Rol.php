<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface; 

/**
 * Rol
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rol implements RoleInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rol_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rol_nombre", type="string", length=50)
     */
    protected $nombre;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;    
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getRole() {
        return $this->getNombre();
    }
    
    public function __toString(){ 
      return $this->getRole(); 
    }
}
